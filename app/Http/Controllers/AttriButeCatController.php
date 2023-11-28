<?php

namespace App\Http\Controllers;

use App\Models\FilterCategoryOption;
use Illuminate\Http\Request;

class AttriButeCatController extends Controller
{
    public function deleteAttrCatOption(Request $request){
        if($request->id){
            FilterCategoryOption::find($request->id)->delete();
        }
        return response()->json([
            'status' => true,
            'message' => 'Xoá thành công'
        ]);
    }
}
