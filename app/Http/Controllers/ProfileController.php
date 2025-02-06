<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Repositories\Profile\ProfileRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    private $user;
    public function __construct(ProfileRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('admin.layouts.profile.index');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(User $user, Request $request, $id): View
    {
        $user = $user->findorFail($id);

        return view('admin.layouts.profile.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'password' => ['required', 'string', 'min:8'],
                'newpassword' => ['required', 'string', 'min:8', 'different:password'],
                'renewpassword' => ['required', 'string', 'min:8', 'same:newpassword'],
            ],
            [
                'password.min' => 'Vui lý nhập mật khẩu tối thiểu 8 ký tự',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'newpassword.required' => 'Vui lòng nhập mật khẩu mới',
                'newpassword.min' => 'Vui lý nhập mật khẩu mới tối thiết 8 ký tự',
                'newpassword.different' => 'Mật khẩu mới của bạn phải khác mật khẩu cũ',
                'renewpassword.required' => 'Mật khẩu không trùng khớp'
            ]
        );
        return $user = $this->user->putProfile($request->all());
        // $user = User::findorFail($id);
        // $user->name = $request->full_name;
        // $user->email = $request->email;
        // return back()->with(['success' => 'Cập nhật thành công']);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function editProfile(ProfileRequest $request)
    {
        



        // Nếu không có file, chỉ trả về dữ liệu đã nhận
        
        return $this->user->editProfile($request->all());
    }
}
