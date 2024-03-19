<?php

namespace App\Http\Controllers;

use App\Mail\UserNotify;
use App\Models\User;
use App\Repositories\User\UserRespository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRespository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function testGetAllRepository(){
        $data =  $this->userRepository->getUser();
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
    public function index(User $User)
    {   
        $User = $this->userRepository->all();
        return view('admin.layouts.user.list', compact('User'));
    }

    public function UserFormAdd(Request $request)
    {
        $role = Role::all();
        $permission = Permission::all();
        return view('admin.layouts.user.add', compact('role', 'permission'));
    }

    public function UserFormPostAdd(Request $request)
    {
        $user = $this->userRepository->create($request->all());
        $mail = Mail::to($user->email)->send(new UserNotify($user));
          return redirect()->route('admin.User.User.index')->back()->with(['message' => "Thêm thành công"]);
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
       
        $role = Role::all();
      
        $permission = Permission::all();
  
        return view('admin.layouts.user.edit', compact('User', 'role', 'permission'));
    }
    public function UserFormUpdate(User $User, Request $request, $id)
    {   
        // dd($request->all());
        
        $User = $User->findOrFail($id);
        $User->name = $request->fullName;
        $User->email = $request->email;
        // $User->username = $request->username;
     
        $User = $User->findOrFail($id);
        $User->syncRoles($request->role);
        $a = [];
        $a  = $request->permission;
        $User->syncPermissions($a);
        $User->save();
     

        

       
    
        return back()->with(['message' => 'Cập nhật thành công']);
    }

    public function UserDelete(User $User, $id)
    {
        $User->findOrFail($id)->delete();
        return back()->with(['message' => 'Xoá thành công']);
    }

    public function getPermissionRole(Role $role, Request $request){

        // $permission = $role->find($role->id)->permissions;
        // return response()->json([
        //     'status' => 200,
        //     'data' => $permission
        // ]);
    }
}
