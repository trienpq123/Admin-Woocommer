<?php
namespace App\Repositories\AttributeValues;
use App\Repositories\RepositoryInterface;
interface AttributeRepositoryInterface extends RepositoryInterface
{
   public function getAll();  
   public function apiListAttr();
   public function addAttr();
   public function edit($id);
   public function store(array $request);
   public function update($id, $attributes = []);
   public function delete($id,$attributes = []);
}