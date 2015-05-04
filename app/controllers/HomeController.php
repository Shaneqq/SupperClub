<?php

class HomeController extends BaseController {


	public function home()
	{
		return View::make('Index');
	}
        public function signUp(){
            return View::make('Account.Signup');
        }

}
