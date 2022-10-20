<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'nim',
        'gender',
        'alamat',
        'fakultas_id'
    ];

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function ekskuls(): BelongsToMany
    {
        return $this->belongsToMany(Ekskul::class, 'mahasiswa_ekskul', 'mahasiswa_id', 'ekskul_id');
    }
}
