<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function pesananDetails()
{
    return $this->hasMany(PesananDetail::class);
}
}
