<?php
namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{

    protected $data;

    public function __construct()
    {
        $this->data['setting'] = (object) [
            'logo' => base_url('assets/images/logo_light.png'),
            'logo_icon' => base_url('assets/images/logo_icon_light.png'),
            'app_name' => 'Sistem Informasi Madrasah Terpadu (SIMADU)'
        ];
    }
    public function login()
    {
        if ($this->request->getMethod() == 'post'){
            try {
                helper('form');
                $rules = [
                    'username' => 'required',
                    'password'  => 'required'
                ];
                if ($this->validate($rules)){
                    $session = session();
                    $user = new UserModel();
                    $username = $this->request->getVar('username');
                    $password = $this->request->getVar('password');
                    $data = $user->where('username', $username)->first();
                    if ($data){
                    }
                }
                else {
                    throw new \Exception($this->validator);
                }
            }
            catch (\Exception $e){

            }


        }
        else {
            $this->data['title'] = 'Masuk';
            helper('form');
            return view('administrator/login', $this->data);
        }
    }

    public function logout()
    {

    }
}
