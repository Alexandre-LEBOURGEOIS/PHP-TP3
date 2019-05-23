<?php
namespace controllers;
 /**
 * Controller Organizations 
 **/
class Organizations  extends ControllerBase{

	public function index(){
		$this->loadView("Organizations /index.html");
	}
}
