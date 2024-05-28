<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class CommentController extends Controller
{
    public function index()
    {
        $comment = CommentModel::all();

        return view('admin.layouts.comment.list', compact('comment'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $id_user = 1;
        $comment = CommentModel::create([
            'id_product' => 1,
            'id_user' => 1,
            'text' => 'Bình luận 1',
            'created_at' => Carbon::now(),
            'status' => 0,
            'type'=>1
        ]);
        if ($request->id_parent) {
            $id_parent = $request->id_parent;
            $comment = CommentModel::create([
                'id_product' => 1,
                'id_user' => 1,
                'text' => 'Bình luận 1',
                'created_at' => Carbon::now(),
                'status' => 0,
                '_parent' => $id_parent,
                'type'=>2
            ]);
        }

        dd($comment);
    }

    public function edit(Request $request, $id)
    {
        $comment = CommentModel::find($id);
        return view('admin.layouts.comment.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $id = CommentModel::find($id);
        if ($id) {
            $id->update([
                'status' => $request->status
            ]);
            return back()->with(['success' => 'Cập nhật thành công']);
        }
        return back()->with(['error' => 'Cập nhật thất bại']);
    }

    public function delete(Request $request, $id)
    {
        CommentModel::find($id)->delete();
        return back()->with(['success' => 'Xoá thành công']);
    }

    public function destroy()
    {
    }
}
