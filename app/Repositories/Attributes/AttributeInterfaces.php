<?php
namespace App\Repositories\Attributes;
use App\Repositories\RepositoryInterface;
interface AttributeRepositoryInterface extends RepositoryInterface
{
   public function getAll();
}