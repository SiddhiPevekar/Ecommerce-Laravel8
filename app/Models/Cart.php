<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    //according to the rules the table name should be plural and model name singular but here in this case it is not there, therefore here we need to include the below statement
    public $table="cart";
}
