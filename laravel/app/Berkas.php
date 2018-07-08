<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
	const CREATED_AT = 'brks_created_at';
    const UPDATED_AT = 'brks_updated_at';
    
    protected $table = 'berkas';
    protected $primaryKey = 'brks_id';

    protected $fillable = [
		'brks_name'
	];
}
