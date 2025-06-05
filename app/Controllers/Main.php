<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Film;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index1()
    {
        echo view('index1');
    }

    public function index2()
    {
        $model = new Film();
        $data['filmy'] = $model->findAll();

        return view('index2', $data);
    }
    
}
