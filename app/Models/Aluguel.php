<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    use HasFactory;
    protected $table  = 'aluguels';
    protected $fillable= ['cliente_id','qtd_bikes', 'horas_bike', 'qtd_patins', 'horas_patins', 'valor', 'status', 'obs' ];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    
}
