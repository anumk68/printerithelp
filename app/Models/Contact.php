<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    use HasFactory;
    protected $table = "contacts";
    protected $guarded = [];
    // protected $fillable = [
    //     'first_name',
    //     'last_name',
    //     'email',
    //     'address',
    //     'contact',
    //     'city',
    //     'form_type',
    // ];
}
