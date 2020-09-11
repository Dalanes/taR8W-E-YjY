<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";

    protected $fillable = [
        "name",
        "comment"
    ];

    public static $rules = [
        "name"      => "required",
        "comment"   =>  "required, min:5"
    ];

    protected $dates = [
        "created_at"
    ];

}
