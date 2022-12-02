<?php

namespace App\Controllers;

use App\Models\IoTeenModel;

class DeviceDetailController extends BaseController
{
    protected $IoTeenModel;

    public function __construct()
    {
        $this->IoTeenModel = new IoTeenModel();
    }
    
    public function detail($id)
    {
        $device = $this->IoTeenModel->getDevice($id);

        $data = [
            'title' => 'Detail Perangkat',
            'device' => $device
        ];

        return view('IoTeen/DeviceDetail', $data);
    }
}