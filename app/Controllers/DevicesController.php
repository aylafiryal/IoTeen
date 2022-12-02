<?php

namespace App\Controllers;

use App\Models\IoTeenModel;

class DevicesController extends BaseController
{
    protected $IoTeenModel;

    public function __construct()
    {
        $this->IoTeenModel = new IoTeenModel();
    }
    
    public function index()
    {
        $devices = $this->IoTeenModel->findAll();

        $data = [
            'title' => 'Daftar Perangkat',
            'devices' => $devices
        ];

        return view('IoTeen/Devices', $data);
    }
}