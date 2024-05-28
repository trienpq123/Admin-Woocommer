<?php
namespace App\Repositories\User;

use App\Mail\UserNotify;
use App\Repositories\BaseRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function create($request = []){
        $user = new  $this->_model;
        $user->name = $request['fullName'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        if ($request['role']) {
            $user->assignRole($request['role']);
        }
        if ($request['permission']) {
            $user->givePermissionTo($request['permission']);
        }
        
    
        return $user;
    }

}
