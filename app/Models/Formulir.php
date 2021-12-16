<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'nisn',
        'user_id',
        'place',
        'birthday',
        'agama',
        'anak_ke',
        'jml_saudara',
        'address',
        'school',
        'gender',
        'tinggal_dengan',
        'penyakit',
        'nama_ayah',
        'nama_ibu',
        'kerja_ayah',
        'kerja_ibu',
        'pend_akhira',
        'pend_akhiri',
        'status',
        'prestasi',
        'file_prestasi',
        'no_telpayah',
        'no_telpibu',
        'ijazah',
        'rapot',
        'phone',
        'photo',
        'nilai1',
        'nilai2',

    ];
    // public function setDateOfBirthAttribute($birthday)
    // {
    //     $this->attributes['birthday'] = Carbon::createFromFormat('d-m-Y', $birthday);
    //     $date = Carbon::createFromFormat('d/m/Y', $birthday);

    //     $monthName = $date->format('F');
    // }






    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function details()
    {
        return $this->hasMany(Formulir::class, 'id', 'id');
    }
}
