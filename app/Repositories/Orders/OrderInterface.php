<?php
namespace App\Repositories\Orders;
use App\Repositories\RepositoryInterface;
interface OrderInterface extends RepositoryInterface
{
  public function getAll();
  public function find($id);
  public function update($id,$request = []);
  public function delete($id);
}