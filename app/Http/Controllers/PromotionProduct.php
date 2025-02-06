<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromotionRequest;
use App\Models\ProductModel;
use App\Models\PromotionModel;
use App\Repositories\Products\ProductRepositoryInterface;
use App\Services\PromotionService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PromotionProduct extends Controller
{
    protected $promotion_service;
    protected $product;
    public function __construct(PromotionService $promotion_service, ProductRepositoryInterface $product)
    {
        $this->promotion_service = $promotion_service;
        $this->product = $product;
    }
    public function index()
    {
        $promotion = $this->promotion_service->getAll();
        $timeNow = Carbon::now();
        $timeNow = $timeNow->toDateTimeString();
        return view('admin.layouts.promotion.list',compact('promotion','timeNow'));
    }

    public function create(Request $request)
    {
        $product = $this->product->getAll();
        return view('admin.layouts.promotion.add', compact('product'));
    }

    public function store(PromotionRequest $request)
    {
        $promotion = $this->promotion_service->store($request);
        if($promotion) {
            return redirect()->route('admin.promotion.index')->with('success', 'Thành công');
        }
        return back()->with(['error', 'Lỗi']);
    }

    public function edit(Request $request, $id)
    {
        $promotion = $this->promotion_service->find($id);
        $product_selected = $promotion->product_promotion->first()->product->pluck('id_product')->toArray();
        $product = $this->product->getAll();
        return view('admin.layouts.promotion.edit', compact('product', 'promotion', 'product_selected'));
    }

    public function update(PromotionRequest $request,$id)
    {
        $promotion = $this->promotion_service->updateOrCreate($id,$request);
        if ($promotion) {
            $promotion->product_promotion()->updateOrCreate( ['promotion_id' => $promotion->id],[
                'promotion_id' => $promotion->id,
                'id_product' => $request->id_product
            ]);
        }
        return back()->with(['success', 'Cập nhật thành công']);
    }

    /**
     * Delete a promotion
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request, $id)
    {
        if ($this->promotion_service->delete($id)) {
            return back()->with('success', 'Xóa thành công');
        }
        return back()->with('error', 'Xóa thất bại');
    }
}
