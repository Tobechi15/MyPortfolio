<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function About(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->About(), true);
	}
	protected function Account(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Account(), true);
	}
	protected function Blog(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Blog(), true);
	}
}