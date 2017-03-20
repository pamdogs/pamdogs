<?php

namespace PamDogs\Http\Controllers;

use Illuminate\Http\Request;

use PamDogs\Http\Requests;
use PamDogs\Http\Controllers\Controller;
use Carbon\Carbon;

class CarbonController extends Controller
{
	public function index()
	{
		$date = '03/12/2016';
		$fecha = Carbon::createFromFormat('d/m/Y',$date)->toDateString();
		print $fecha;
	}
}