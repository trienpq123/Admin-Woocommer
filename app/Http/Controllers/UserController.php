<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailUserCreate;
use App\Mail\UserNotify;
use App\Models\teamsModel;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\User\UserRespository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function testGetAllRepository()
    {
        $data = Redis::get('getUsers');
        if(!$data){
            $data =  $this->userRepository->getUser();
            Redis::set('getUsers', json_encode($data));
        }else{
            $data = json_decode($data, true);
        }
       
        
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
    public function index(User $User)
    {
        
        $User = Redis::get('getAllUsers');
        
        if(!$User){
            $User = $this->userRepository->all();
            Redis::set('getAllUsers', json_encode($User));
        }else{
            $UserData = $this->userRepository->all();
            $User = json_decode($User, true);
            $User = $User === $UserData->toArray() ? $User : $UserData->toArray();
            $User = collect($User)->map(function($userData) {
                return new User($userData); // Khôi phục thành các đối tượng Eloquent
            });
            // dd(Auth::user());
            dd(Auth::user()->createToken('trien')->plainTextToken);
        }

        dd($User);
       
        return view('admin.layouts.user.list', compact('User'));
    }

    public function UserFormAdd(Request $request)
    {
        $cureentUser = Auth::user();
        if ($cureentUser->hasRole('Super Admin')) {
            $role = Role::all();
            $permission = Permission::all();
            $teams = teamsModel::all();
        } else {
            // Lọc roles dựa trên quyền của người dùng
            // Lấy các roles mà người dùng hiện tại có thể thấy
            $role = $cureentUser->roles;
            

            // Lấy các permissions mà người dùng hiện tại có thể thấy
            $permission = $cureentUser->permissions;
          
            // Lấy các teams mà người dùng hiện tại có thể thấy
            $teams = teamsModel::all();
        }

        

        return view('admin.layouts.user.add', compact('role', 'permission', 'teams'));
    }

    public function UserFormPostAdd(Request $request)
    {

        $user = $this->userRepository->create($request->all());
        // $mail = Mail::to($user->email)->send(new UserNotify($user));
        SendEmailUserCreate::dispatch($user)->delay(now()->addSeconds(5));
        return redirect()->route('admin.User.User.index')->with(['message' => "Thêm thành công"]);
    }

    public function getDataForApi(User $User)
    {
        return response()->json([
            'status' => 200,
            'data' => $User->pluck('name')->all()
        ]);
    }

    public function UserFormEdit(User $User, $id)
    {

        $User = $User->findorFail($id);

        $cureentUser = Auth::user();
        if ($cureentUser->hasRole('Super Admin')) {
            $role = Role::all();
            $permission = Permission::all();
            $teams = teamsModel::all();
        } else {
            // Lọc roles dựa trên quyền của người dùng
            // Lấy các roles mà người dùng hiện tại có thể thấy
            $role = $cureentUser->roles;
            

            // Lấy các permissions mà người dùng hiện tại có thể thấy
            $permission = $cureentUser->permissions;
          
            // Lấy các teams mà người dùng hiện tại có thể thấy
            $teams = teamsModel::all();
        }

        return view('admin.layouts.user.edit', compact('User', 'role', 'permission'));
    }
    public function UserFormUpdate(User $User, Request $request, $id)
    {
        // dd($request->all());
        $this->userRepository->update($id, $request->all());
        return back()->with(['message' => 'Cập nhật thành công']);
    }

    public function UserDelete(User $User, $id)
    {
        $User->findOrFail($id)->delete();
        return back()->with(['message' => 'Xoá thành công']);
    }

    public function getPermissionRole(Role $role, Request $request)
    {

        // $permission = $role->find($role->id)->permissions;
        // return response()->json([
        //     'status' => 200,
        //     'data' => $permission
        // ]);
    }

    public function destroy(User $user, Request $request)
    {
    }
}
