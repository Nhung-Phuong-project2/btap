<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Connection;


class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable =[
        'name',
        'avatar',
        'details',
        'id_author',
        'id_type',
        'id_nxb',
        //RELATED ID
    ];
    public function author()
    {
        return $this -> belongsTo(User::class, 'id_author', 'id');
    }

    public function book_type()
    {
        return $this -> belongsTo(User::class,'id_type','id');
    }

    public function nxb()
    {
        return $this -> belongsTo(User::class,'id_nxb','id');
    }
} 


