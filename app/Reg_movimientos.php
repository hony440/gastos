<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg_movimientos extends Model
{
    //
    public $timestamps=false;
    protected $table='reg_movimientos';
    protected $primaryKey='mov_id';

    protected $fillable=['mov_fecha','mov_tipo','mov_cantidad','usu_id','cat_id','tip_id'];
}
