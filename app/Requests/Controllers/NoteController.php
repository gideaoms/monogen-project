<?php

namespace App\Requests\Controllers;

use Monogen\Http\Request;
use App\Models\ExampleModel;

class NoteController
{
	private $example;

	public function __construct()
	{
		$this->example = new ExampleModel;
	}

	public function index(Request $request)
	{
		return $this->example->all();
	}
}