<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadesComplementar extends Model
{
    use HasFactory;

    protected $table = 'summa_atividadecomplementar';

    protected $guarded = ['id'];
}
