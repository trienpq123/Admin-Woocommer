<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Role $role)
    {
        $role = $role->all();
        return view('admin.layouts.roles.list', compact('role'));
    }

    public function RoleFormAdd(Request $request, Permission $permission)
    {
        $permission = $permission->all();
        return view('admin.layouts.roles.add', compact('permission'));
    }

    public function RoleFormPostAdd(Request $request)
    {
        $array_permission = [];
        if($request->permission){
            $array_permission = $request->permission;
        }
        
        if ($request->permissions_new) {
            $permission_new =  explode(',', $request->permissions_new);
            foreach ($permission_new as $p) {
                $check_permission = Permission::where('name', $p)->first();
                if (!$check_permission) {
                    $lastPermission = Permission::create(['name' => $p]);
                    array_push($array_permission, strval($lastPermission->id));
                }
            }
        }
        $role = Role::create(['name' => $request->role_name]);
        $role->syncPermissions($array_permission);
        return back()->with(['message' => "Thêm thành công"]);
    }

    public function getDataForApi(Role $role)
    {
        return response()->json([
            'status' => 200,
            'data' => $role->pluck('name')->all()
        ]);
    }

    public function RoleFormEdit(Role $role, $id)
    {

        $role = $role->findorFail($id);
        $user = Auth::user();
        $user->assignRole($role->name);
        foreach($role->permissions as $permission){
            $user->givePermissionTo($permission->id);
        }

        $role_has_permission = $role->getAllPermissions();
        $permission = Permission::all();
        return view('admin.layouts.roles.edit', compact('role', 'permission', 'role_has_permission'));
    }
    public function RoleFormUpdate(Role $role, Request $request, $id)
    {
        $array_permission = $request->permission;
        if ($request->permissions_new) {
            $permission_new =  explode(',', $request->permissions_new);
            foreach ($permission_new as $p) {
                $check_permission = Permission::where('name', $p)->first();
                if (!$check_permission) {
                    $lastPermission = Permission::create(['name' => $p]);
                    array_push($array_permission, strval($lastPermission->id));
                }
            }
        }
        
        $role =  $role->findOrFail($id);
        $role->name = $request->role_name;
        $role->syncPermissions($array_permission);

        $role->save();
        return back()->with(['message' => 'Cập nhật thành công']);
    }

    public function RoleDelete(Role $role, $id)
    {

        $role = $role->findOrFail($id);
        $role->syncPermissions([]);
        $role->delete();
        return back()->with(['message' => 'Xoá thành công']);
    }
}
