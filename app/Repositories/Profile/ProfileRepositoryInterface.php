<?php
namespace App\Repositories\Profile;
use App\Repositories\RepositoryInterface;
use App\Models\User;
interface ProfileRepositoryInterface extends RepositoryInterface
{
    //ví dụ: lấy 5 sản phầm đầu tiên
    public function putProfile();
    public function getProfile();
    public function editProfile();
}