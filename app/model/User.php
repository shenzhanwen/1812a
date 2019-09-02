<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   	protected $table = '1812a';
	protected $primaryKey = 'u_id';
	public $timestamps = false;
	protected $guarded = [];
}
