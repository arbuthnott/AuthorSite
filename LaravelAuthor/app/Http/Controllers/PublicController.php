<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublicController extends Controller
{
    /**
	 * Show the main homepage.
	 *
	 * @return Response
	 */
	public function index()
	{
		dd("in public controller");
		return view('home');
	}
}
