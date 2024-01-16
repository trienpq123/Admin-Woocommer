<?php
namespace App\Repositories\Roles;
use App\Repositories\BaseRepository;
use App\Repositories\Roles\RoleRepositoryInterface;
class RoleRespository extends BaseRepository implements RoleRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \Spatie\Permission\Models\Role::class;
    }

    public function getRole(){
        return $this->_model->all();
    }
    
    

    public function all()
    {
        return $this->_model->All();
    }

   
}
