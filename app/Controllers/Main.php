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
    $filmModel = new \App\Models\Film();
    $zanrModel = new \App\Models\Zanr();
    $reziserModel = new \App\Models\Reziser();
    $herecModel = new \App\Models\Herec();

    $filmy = $filmModel
        ->select('film.*, reziser.jmeno AS reziser_jmeno, reziser.prijmeni AS reziser_prijmeni')
        ->join('reziser', 'reziser.id = film.reziser_id', 'left')
        ->findAll();

    $herci = $herecModel->findAll();
    foreach ($filmy as &$film) {
        $nahodnyHerec = $herci[array_rand($herci)];
        $film->herec_jmeno = $nahodnyHerec->jmeno;
        $film->herec_prijmeni = $nahodnyHerec->prijmeni;
    }

    $zanry = $zanrModel->findAll();

    return view('index2', [
        'filmy' => $filmy,
        'zanry' => $zanry
    ]);
}
    
}
