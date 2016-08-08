<?php

namespace App\Controllers;

use Monogen\Http\Request;
use App\Models\ExampleModel;

class ExampleController
{
	private $example;

	public function __construct()
	{
		/*
		| $this->example = new ExampleModel;
		*/
	}

	public function index(Request $request)
	{
		/*
		| return $this->example->all();
		*/
		return "Hello world!";
	}
}