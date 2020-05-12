<?php
namespace controllers;
 /**
 * Controller InscriptionController
 **/
class InscriptionController extends ControllerBase{
	/**
	 *
	 * @get("_default","name"=>"Home")
	 */
	public function index(){
		$this->loadView("InscriptionController/index.html");
	}

	/**
	 *@route("Inscription")
	**/
	public function Inscription(){
		
		$this->loadView('InscriptionController/Inscription.html');

	}


	/**
	 *@route("Inscription")
	**/
	public function bouton(){
		
		$this->loadView('InscriptionController/bouton.html');

	}

}
