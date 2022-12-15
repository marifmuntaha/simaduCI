<?php
namespace App\Controllers\Administrator;

use App\Controllers\BaseController;

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
            return $this->request->getMethod();
        }
        else {
            $this->data['title'] = 'Masuk';
            return view('administrator/login', $this->data);
        }
    }

    public function logout()
    {

    }
}
