<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'tbl_project';
    
    public function invoice() {
        return $this->hasMany('\App\Invoice');
    }
}
