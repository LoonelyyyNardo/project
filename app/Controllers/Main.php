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
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $model = new UzivatelModel();

        $email = $this->request->getPost('email');
        $heslo = $this->request->getPost('heslo');

        $uzivatel = $model->where('email', $email)->first();

        if ($uzivatel && password_verify($heslo, $uzivatel['heslo'])) {
            $session->set([
                'uzivatel_id' => $uzivatel['id'],
                'uzivatel_jmeno' => $uzivatel['jmeno'],
                'prihlasen' => true
            ]);
            return redirect()->to('/'); // nebo na dashboard
        } else {
            $session->setFlashdata('chyba', 'Neplatný email nebo heslo');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
