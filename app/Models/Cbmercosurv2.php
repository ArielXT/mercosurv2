<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbmercosurv2 extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primaryKey = 'id';
    protected $fillable =  array('nombre','tipo', 'precio', 'descripcion', 'idpais', 'idpais2');
}
