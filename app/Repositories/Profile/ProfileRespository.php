<?php

namespace App\Repositories\Profile;

use App\Mail\UserNotify;
use App\Repositories\BaseRepository;
use App\Repositories\Profile\ProfileRespositoryInterface;
use CKSource\CKFinder\Filesystem\File\File;
use Faker\Core\File as CoreFile;
use Faker\Provider\File as ProviderFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\json;

class ProfileRespository extends BaseRepository implements ProfileRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function getProfile()
    {
        return $this->_model->findorFail(Auth::user()->id);
    }

    public function putProfile($request = [])
    {
        $user = $this->_model->findorFail(Auth::user()->id);
        // $passwordOld =  Hash::make($request['password']);

        // $user->password = Hash::make($request['password']);
        // $user->save();
        if (Hash::check($request['password'], $user->password)) {
            if ($request['newpassword'] == $request['renewpassword']) {
                $user->password = Hash::make($request['newpassword']);
                $user->save();
                // Mail::to($user->email)->send(new UserNotify($user, 'Mật khẩu mới'));
                return response()->json([
                    'message' => 'Thay đổi mật thành công',
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'renewpassword' => 'Mật này không trình khóp'
                ]);
            }
        } else {
            return response()->json([
                'errors' => ['password' => 'Mật khẩu cũ không đúng']
            ]);
        }
    }

    public function editProfile($request = [])
    {
        $user = $this->_model->findorFail(Auth::user()->id);
        $user->name = $request['name'];
        // $user->email = $request['email'];
        $user->phone = $request['phone'];
        if (array_key_exists('file', $request)) {

            if ($request['file'] != null) {
                // Xóa ảnh cũ

                // if (Storage::disk('public')->exists('uploads' . '/' . $user->link_img)) {
                //  Storage::disk('public')->delete('uploads' . '/' . $user->link_img);
                //     return response()->json([
                //         'status' => 200,   
                //         'message' => 'Delete image successfully',
                //     ]);
                // }

                FacadesFile::delete('storage/uploads' . '/' . $user->name_img);


                $file = $request['file'];
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');
                // Thêm đường dẫn file vào dữ liệu trả về
                // $data = $request->all();
                $user->link_img = '/storage/' . $filePath;
                $user->name_img = $fileName;
            }
        }
        $user->save();
        return response()->json([
            'status' => 200,
            'message' => 'Profile updated successfully',
            'data' => $request
        ]);
    }
}
