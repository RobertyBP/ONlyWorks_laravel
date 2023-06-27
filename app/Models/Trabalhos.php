<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabalhos extends Model
{
    use HasFactory;
    protected $table = 'trabalhos';
    protected $fillable = [
        'titulo',
        'descricao',
        'datapublicacao',
        'dataentrega',
        'requisitos',
        'pagamento',
        'statusT',
        'autor'
    ];

}