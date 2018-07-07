<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeBerkas extends Model
{
	const CREATED_AT = 'tb_created_at';
    const UPDATED_AT = 'tb_updated_at';
    
    protected $table = 'tipe_berkas';
    protected $primaryKey = 'tb_id';

    protected $fillable = [
		'tb_name'
	];
}
