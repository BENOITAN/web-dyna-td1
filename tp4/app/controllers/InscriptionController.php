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
	public function bouton(){
		
		$this->loadView('InscriptionController/bouton.html');

	}


	/**
	 *@route("/do/Inscription")
	**/
	public function doinscrit(){
		
		$this->loadView('InscriptionController/doinscrit.html');

	}

}
