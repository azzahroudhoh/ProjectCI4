<?php namespace App\Controllers;

class Helloworld extends BaseController {

	public function index($name, $npm)
	{
		//echo $this->name;
		echo $name ."<br>";
		echo $npm ."<br>";
		//echo "Hello Azzah";
	}

	public function show()
	{
		echo "Selamat Datang di Azzah's Store <br/>";
		echo "Menjual berbagai jenis HP <br/>";
		echo "<br/><br/>SELAMAT BERBELANJA :)";
	}
} 