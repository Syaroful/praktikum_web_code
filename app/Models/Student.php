<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // delete tabel timestamps
    protected $table = 'students';
    public $timestamps = false;
    protected $primaryKey = 'nim';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'nomor_hp',
    ];
}
