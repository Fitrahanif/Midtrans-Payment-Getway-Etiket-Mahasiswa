<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Auth extends BaseController
{
    protected User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function login()
    {
        if ($this->request->getMethod() === "get") {
            return view("auth/login");
        } else if ($this->request->getMethod() === "post") {
            $validate = $this->validate([
                'email' => "required",
                "password" => "required",
            ]);

            if ($validate) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $user = $this->user->where('email', $email)->first();
                if ($user != null) {
                    $check_pw = password_verify($password, $user['password']);
                    if ($check_pw) {
                        session()->set([...$user]);
                        // implement role user in here
                        switch ($user['role']) {
                            case 'user':
                                return redirect()->to('/user');
                            case 'admin':
                                return redirect()->to('/admin');
                            default:
                                return redirect()->to('/');
                        }
                    } else {
                        return redirect()->back()->with('error_login', "Invalid email dan password");
                    }

                } else {
                    return redirect()->back()->with('error_login', "Invalid email dan password");
                }
            } else {
                return redirect()->back()->with('validate', $this->validator->getErrors());
            }
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
    public function register()
    {
        if ($this->request->getMethod() === "get") {
            return view("auth/register");
        } else if ($this->request->getMethod() === "post") {
            $validate = $this->validate([
                'email' => "required",
                "password" => "required",
                'nama' => 'required'
            ]);

            if ($validate) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $nama = $this->request->getVar("nama");

                $register = $this->user->insert([
                    'nama'=>$nama,
                    'email'=>$email,
                    'password'=>password_hash($password,PASSWORD_DEFAULT),
                    'role'=>'user'
                ]);
                if($register){
                    return redirect()->to('/auth/login')->with('success_register',"berhasil register user");
                }else{
                    return redirect()->back()->with('error_register',"gagal register user");
                }
            } else {
                return redirect()->back()->with('validate', $this->validator->getErrors());
            }
        }

    }
}
