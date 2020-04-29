<?php
namespace controllers;
 /**
 * Controller Messages
 **/
class Messages extends ControllerBase{

	public function index(){
	    echo "Hello world";
	}

	public function Hello($destinataire='all the world !'){
		echo "Hello " . $destinataire;
	}
	
	public function display($message,$type='info',$icon='info'){
		
	    $this->loadView('Messages/display.html',["message"=>$message,"type"=>$type,"icon"=>$icon]);

        public function hello($destinataire='all the world !'){
        echo "Hello ". $destinataire;
	}

}
