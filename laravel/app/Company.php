<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'tbl_company';

    public function project() {
        return $this->hasMany('\App\Project');
    }
}