<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = "pasiens";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'no_rekam_medik', 'nama', 'alamat', 'jenis_kelamin', 'tanggal_lahir'];
 
    public function odontogram()
    {
    	return $this->hasOne(Odontogram::class);
    }
}
