<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'image', 'fName', 'lName','gender', 'pNumber', 'pNumber2', 'pNumber3', 'pNumber4', 'email', 'email2', 'email3', 'job', 'city', 'about'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
