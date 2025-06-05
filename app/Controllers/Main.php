<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index1()
    {
        echo view('index1');
    }

    public function index2()
    {
        echo view('index2');
    }
}
