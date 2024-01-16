<?php
namespace App\Repositories\User;

use App\Repositories\BaseRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

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

    public function all(){
        return $this->_model->all();
    }

    public function create($attribute = []){
        $user = new  $this->_model;
        $user->name = $attribute['fullName'];
        $user->email = $attribute['email'];
        $user->password = Hash::make($attribute['password']);
        $user->save();
        if ($attribute['role']) {
            $user->assignRole($attribute['role']);
        }
        if ($attribute['permission']) {

            $user->givePermissionTo($attribute['permission']);
        }
        return $user;
    }
}
