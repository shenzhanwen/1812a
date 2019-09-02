<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\User;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
   	public function user()
   	{
   		$data = [
   			'u_name'=>'沈',
   			'u_sex'=>'18'
   		];
   		$ass = User::insert($data);
   		dd($ass);
   	}

   	public function redis()
   	{
   		$key = 'a';
   		$val = Redis::get($key);
   		var_dump($val);
   	}
}
