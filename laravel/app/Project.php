<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_project';
    
    public function invoice() {
        return $this->hasMany('\App\Invoice');
    }
}
