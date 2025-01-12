<?php
namespace App\Repositories\User;
use App\Repositories\RepositoryInterface;
use App\Models\User;
interface UserRepositoryInterface extends RepositoryInterface
{
    //ví dụ: lấy 5 sản phầm đầu tiên
    public function getUser();
    public function all();
    public function deleteAllUserApi($id);
    public function getAllTeams();
    public function loginApi($request = []);
}