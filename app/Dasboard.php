<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dasboard extends Model
{
    protected $fillable = [
        'jobid', 'user', 'name_job', 'state', 'n_node', 'node_list', 'cpus'
    ];

    public static function Archive(){

        
    }
}
