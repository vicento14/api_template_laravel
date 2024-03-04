<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccounts extends Model
{
    use HasFactory;

    /**
     *  @var string
     */
    protected $connection = 'mysql';

    protected $fillable = [
        'id_number',
        'full_name',
        'username',
        'password',
        'section',
        'role',
    ];
}
