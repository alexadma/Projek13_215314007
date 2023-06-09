<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
   protected $table ='login';
   protected $allowedFields = ["username" , "password"];

}