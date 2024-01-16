<?php
namespace App\Repositories\Pages;

use App\Models\PagesModel;
use App\Repositories\BaseRepository;
use App\Repositories\Pages\PageRepoitoryInterface;
class PageRepository extends BaseRepository implements PageRepoitoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return PagesModel::class;
    }

   public function getAll(){
        return $this->_model->get();
   }

   
}
