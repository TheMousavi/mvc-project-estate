<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Services\ImageUpload;
use App\Http\Services\MailService;
use App\User;
use mysql_xdevapi\Session;

class RegisterController
{
    private $redirectTo = '/login';
    public function view()
    {
        return view('auth.register');
    }

    public function register()
    {
        $request = new RegisterRequest();
        $inputs = $request->all();
        $path = 'images/avatar/'. date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand('Y/M/d');
        $inputs['avatar'] = ImageUpload::UploadAndFitImage($request->file('avatar') , $path , $name , 100 , 100);
        $inputs['verify_token'] = generateToken();
        $inputs['is_active'] = 0;
        $inputs['user_type'] = 'user';
        $inputs['status'] = 0;
        $inputs['remember_token'] = null;
        $inputs['remember_token_expire'] = null;
        $inputs['password'] = password_hash($request->password , PASSWORD_DEFAULT);
        User::create($inputs);
        $message = '
            <h2>ایمیل فعالسازی</h2>
            <p> کاربر گرامی ثبت نام شما با موفقیت صورت گرفت برای فعال سازی حساب کاربری خود روی لینک زیر کلیک کنید</p>
            <p class="text-align : center">
                <a href="'.route('auth.activation' , [$inputs['verify_token']]).'"> فعال سازی حساب کاربری </a>
            </p>
        ';
        $mailService = new MailService();
        $mailService->send($inputs['email'] , 'ایمیل فعالسازی' , $message);
        return redirect($this->redirectTo);
    }

}

