<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggotum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anggota';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_anggota';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_anggota', 'nama', 'jurusan', 'generasi', 'angklung'];

    
}
