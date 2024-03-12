<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class CommentController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
       $comment = CommentModel::create([
            'id_product' => 1,
            'id_user' => 1,
            'text' => 'Bình luận 1'
       ]);
       dd($comment);

    }
    
    public function edit(Request $request , $id){
        $comment = CommentModel::find($id);
        // return view('admin.comment.edit',compact('comment'));
    }

    public function update(Request $request, $id){
        $id = CommentModel::find($id);
        if($id){
            $id->update([
                'text' => $request->text
            ]);
            return back()->with(['success' => 'Cập nhật thành công']);
        }
        return back()->with(['error' => 'Cập nhật thất bại']);
    }

    public function delete(Request $requet, $id){
        CommentModel::find($id)->delete();
        return back()->with(['success' => 'Xoá thành công']);
    }
    
    public function destroy(){

    }
}

