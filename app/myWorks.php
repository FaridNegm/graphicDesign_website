<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myWorks extends Model
{
    protected $table = 'worksandposts';
    protected $fillable = ['title', 'body', 'image' , 'category'  , 'status'];

}
