<?php
namespace App\Repositories\Products;
use App\Repositories\RepositoryInterface;
interface ProductRepositoryInterface extends RepositoryInterface
{
  public function index();
  public function GetImageProduct();
}