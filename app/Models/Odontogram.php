<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontogram extends Model
{
    protected $table = "odontograms";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'pasien_id', 'dokter','tanggal_kunjungan', 'kondisi_gigi'];
 
    public function pasien()
    {
    	return $this->belongsTo(Pasien::class);
    }
}
