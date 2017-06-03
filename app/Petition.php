<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    protected $table ='petitions';

    protected $fillable = ['title','body'];//buat memfilter isi di form
////realtion to user
    public function user(){
        return $this->BelongsTo(User::class);
    }
}
