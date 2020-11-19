<?php namespace App\Controllers;

class GateLogin extends BaseController
{
	public function index()
	{
		return view ('gate/login');
    }
    
    public function fungsi_login(){
        $email= $this->request->getVar('email');
        $password= $this->request->getVar('password');
        if($email=="91azzahroudhoh@gmail.com"&&$password=="admin")
        {
            return redirect()->to('/HelloWorld/show');
        }else{
            return redirect()->to('/GateLogin');
        }
    }
    
    public function register(){
        return view('gate/register');
    }

    public function admin(){
        return view('gate/admin');
    }
}