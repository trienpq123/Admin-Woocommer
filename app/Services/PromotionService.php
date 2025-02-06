<?php

namespace App\Services;

use App\Repositories\Products\ProductRepositoryInterface;
use App\Repositories\Promotion\PromotionRepositoryInterface;
use App\Repositories\Promotion\PromotionsRepository;
use Carbon\Carbon;

class PromotionService
{
    private $promotion;
    public function __construct(PromotionRepositoryInterface $promotion){
        $this->promotion = $promotion;
    }
   /**
     * Get all Promotion
     * @return array
     */
    public function getAll(){
        return $this->promotion->getAll();
    }
    
    /**
     * Process Save new Promotion.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return boolean
     */
    public function store($request){
        $attributes = [
            'title' => $request->name,
            'discount' => $request->discount,
            'from' => $request->date_start ? Carbon::parse($request->date_start)->toDateTimeString() : '',
            'to' => $request->date_end ? Carbon::parse($request->date_end)->toDateTimeString() : '',
            'status' => $request->status,
            'type' => $request->type,
        ];

        $promotion = $this->promotion->create($attributes);

        if ($promotion) {
            $promotion->product_promotion()->create([
                'id_promotion' => $promotion->id,
                'id_product' => $request->id_product
            ]);
            return true;
        }
        return false;
    }

    /**
     * Find a Promotion by ID
     *
     * @param  int  $id
     * @return \App\Models\PromotionModel
     */
    public function find($id){
        return $this->promotion->find($id);
    }

    public function getProductPromotion($id){
        $promotion = $this->find($id);
        return $promotion->product_promotion->first();
    }

    /**
     * Update or Create a Promotion
     * 
     * @param  array  $request
     * @param  int  $id
     * @return \App\Models\PromotionModel
     */
    public function updateOrCreate($request,$id){
        $date_start = '';
        $date_end = '';
        if ($request->date_start) {
            $date_start = Carbon::parse($request->date_start)->toDateTimeString();
        }
        if ($request->date_end) {
            $date_end = Carbon::parse($request->date_end)->toDateTimeString();
        }
        $attributes = [
           'title' => $request->name,
            'discount' => $request->discount,
            'from' => $date_start,
            'to' => $date_end,
            'status' => $request->status,
            'type' => $request->type,
        ];
        return $this->promotion->updateOrCreate($id,$attributes);
    }

    public function delete($id){
        $promotion = $this->find($id);
        if ($promotion) {
            $promotion->product_promotion()->delete();
            return $promotion->delete();
        }
        return false;
    }

}
?>