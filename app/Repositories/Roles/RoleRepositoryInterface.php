<?php
namespace App\Repositories\Roles;
use App\Repositories\RepositoryInterface;
use App\Models\Role;
interface RoleRepositoryInterface extends RepositoryInterface
{
    //ví dụ: lấy 5 sản phầm đầu tiên
    public function getRole();
    public function all();
}