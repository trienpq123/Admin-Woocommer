<?php

namespace App\Repositories\Roles;

use App\Repositories\BaseRepository;
use App\Repositories\Roles\RoleRepositoryInterface;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleRespository extends BaseRepository implements RoleRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \Spatie\Permission\Models\Role::class;
    }

    public function getRole()
    {
        return $this->_model->all();
    }



    public function all()
    {
        return $this->_model->All();
    }

    public function create( $attributes = [])
    {
        $array_permission = [];
        $check = false;
        if (isset($attributes['permissions'])) {
            $array_permission = $attributes['permissions'];
        }
        if (isset($attributes['permissions_new'])) {
            $permission_new =  explode(',', $attributes['permissions_new']);
            foreach ($permission_new as $p) {
                $check_permission = Permission::where('name', $p)->first();
                if (!$check_permission) {
                    $lastPermission = Permission::create(['name' => $p]);
                    array_push($array_permission, strval($lastPermission->id));
                }
            }
        }
        $role = Role::create(['name' => $attributes['role_name']]);
        $role->syncPermissions($array_permission);
        if($role){
            $check = true;
        }
        return $check;
    }
}
