<?php

namespace App\Repositories\User;

use App\Mail\UserNotify;
use App\Repositories\BaseRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function Pest\Laravel\json;

class UserRespository extends BaseRepository implements UserRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\User::class;
    }


    public function getUser()
    {
        return $this->_model->take(5)->get();
    }

    public function all()
    {
        $currentUser = Auth::user();
        $team_id = $currentUser->team_id;
        if ($currentUser->hasRole('Super Admin')) {
            return $this->_model->with('Teams')->get();
        } else {
            return $this->_model->where('team_id', $team_id)->with('Teams')->get();
        }
    }

    public function create($request = [])
    {
        $currentUser = Auth::user();
        $user = new  $this->_model;
        $user->name = $request['fullName'];
        $user->email = $request['email'];
        $user->team_id = $request['teams'];
        $user->password = $request['password'];
        if (array_key_exists('image-avatar', $request)) {
            $imageName = $request['image-avatar'];
            $name_image = time() . '_' . $imageName->getClientOriginalName();
            $explode = explode('.', $name_image);
            $typeImage = end($explode);
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
            if (in_array($typeImage, $imageExtensions)) {
                $path = 'public/uploads/images/avatar/';
                $imageName->move($path, $name_image);
                $link_url = env('APP_URL') . '/' . $path . $name_image;
                $user->link_img = $link_url;
                $user->name_img = $name_image;
            }
        }
        $user->save();
        if (Auth::user()->hasRole('Super Admin')) {
            $user->assignRole($request['role']);
            $user->givePermissionTo($request['permission']);
        } else {
            if (array_key_exists('role', $request)) {
                // Lấy ID ROLE hiện tại của người dùng
                $getRoleCureents = $currentUser->roles->pluck('id')->map('strval')->toArray();
                if (empty(array_intersect($request['role'], $getRoleCureents))) {
                    return back()->with(['error' => 'Bạn không có quyền này để thêm.'], 403);
                } else {

                    $user->assignRole($request['role']);
                }
            }
            if (array_key_exists('permission', $request)) {
                $getPermissionCureents = Auth::user()->permissions->pluck('id')->map('strval')->toArray();
                if (empty(array_intersect($request['permission'], $getPermissionCureents))) {
                    return back()->with(['error' => ' Bạn không có quyền này để thêm.'], 403);
                } else {
                    $user->givePermissionTo($request['permission']);
                }
            }
        }
        return $user;
    }

    public function update($id, $request = [])
    {
        $User = $this->_model->findOrFail($id);




        $User->save();
        if (Auth::user()->hasRole('Super Admin')) {
            $role = [];
            $permission = [];
            if(array_key_exists('permission', $request)){
                $permission = $request['permission'];
            }
            if(array_key_exists('role', $request)){
                $role = $request['role'];
            }
            $User->syncRoles($role);
            $User->syncPermissions($permission);
        } else {
            if (array_key_exists('role', $request)) {
                $getRoleCureents = Auth::user()->roles->pluck('id')->map('strval')->toArray();
                // dd($getRoleCureents, $request['role']);
                if (empty(array_intersect($request['role'], $getRoleCureents)) ) {
                    return back()->with(['error' => 'Bạn không có quyền này để thêm.'], 403);
                } else {
                    // $User->assignRole($request['role']);
                    $User->syncRoles($request['role']);
                }
            }
            if (array_key_exists('permission', $request)) {
                // dd($request['permission']);
                $a = [];
                $a  = $request['permission'];
                $getPermissionCureents = Auth::user()->permissions->pluck('id')->map('strval')->toArray();
                if (empty(array_intersect($request['permission'], $getPermissionCureents))) {
                    return response()->json(['error' => 'Bạn không có quyền thêm quyền này'], 403);
                } else {
                    $User->syncPermissions($a);
                }
            }
        }
    }

    public function deleteAllUserApi($request)
    {
        $id = $request['ids'];
        foreach ($id as $key => $value) {
            $user = $this->_model->findorFail($value);
            $user->syncPermissions([]);
            $user->syncRoles([]);
            $this->_model->find($value)->delete();
        }

        return response()->json([
            'status' => 200,
            'message' => 'Đã xóa thành công',
            'data' => $id
        ]);
    }

    public function getAllTeams()
    {
        return $this->_model->with('teams')->get();
    }

    public function loginApi($request = [])
    {
        dd($request);
        $user = $this->_model->where('email', $request['email'])->first();
        if ($user) {
            if (Hash::check($request['password'], $user->password)) {
                return $user;
            }
        }
        return false;
    }
}
