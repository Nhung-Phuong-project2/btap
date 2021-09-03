<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;
    protected $table ='reader';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
    ];

    public function borrow_ticket(){
        return $this -> belongsTo(User::class,'id_borrow_ticket','id');
    }
}
