<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_company';

    public function project() {
        return $this->hasMany('\App\Project');
    }
    
//    public function invoice() {
//        return $this->hasMany('\App\Invoice');
//    }
}