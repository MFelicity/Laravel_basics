<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    //protected $table = 'posts';
    //primary key
    //public $primaryKey = 'id';
    //timestamps
    //public $timestamp = false;
    public function user(){
        return $this ->belongsTo(App\Models\User);
    }
    use HasFactory;
}
