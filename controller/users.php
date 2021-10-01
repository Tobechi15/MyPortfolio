<?php
class Users extends Controller{
	protected function Login(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Login(), true);
	}
	protected function Register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Register(), true);
	}
	protected function Errorpage(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Errorpage(), true);
	}
}