<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    protected $table="izin";
    protected $fillable = ['tanggal_izin', 'file', 'status_izin', 'user_id'];
}
