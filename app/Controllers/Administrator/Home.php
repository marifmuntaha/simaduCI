<?php
namespace App\Controllers\Administrator;


use App\Controllers\BaseController;

class Home extends BaseController
{
    public $data;

    public function __construct()
    {
        $this->data['setting'] = (object) [
            'logo' => base_url('assets/images/logo_light.png'),
            'logo_icon' => base_url('assets/images/logo_icon_light.png'),
        ];
        $this->data['user'] = (object) [
            'image'     => base_url('assets/images/placeholders/placeholder.jpg'),
            'fullname'  => 'Muhammad Arif Muntaha',
            'role'      => 'Administrator'
        ];
    }
    public function index()
    {
        $this->data['title'] = 'Beranda - Sistem Informasi Madrasah Terpadu (SIMADU)';

        return view('administrator/home', $this->data);
    }
}
