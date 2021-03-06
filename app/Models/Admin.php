<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $fillable = ['nama_user', 'nik', 'alamat', 
    'no_telp', 'email', 'username', 'password'];

    protected $table = 'tb_admin';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;
}
