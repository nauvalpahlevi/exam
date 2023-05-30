<?php namespace App\Models;

use CodeIgniter\Model;

class models_086 extends Model

{

protected $table = 'tb_uts_086';

public function getMhs()

{
    return $this->findAll();
}

}