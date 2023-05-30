<?php

namespace App\Controllers;

//use CodeIgniter\Controller;

use App\Models\models_086;

class Nilaimhs_086 extends BaseController

{

public function index()

{

$model = new models_086();

$data['mahasiswa'] = $model->getMhs();
echo view('tampil_Nilai_mhs',$data);

}



}