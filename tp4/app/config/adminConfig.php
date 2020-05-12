<?php
return array(
	"devtools-path"=>"Ubiquity",
	"info"=>array(
			"controllers",
			"routes"
			),
	"display-cache-types"=>array(
			"controllers",
			"models"
			),
	"maintenance"=>array(
			"on"=>false,
			"modes"=>array(
					"maintenance"=>array(
							"excluded"=>array(
									"urls"=>array(
											"admin",
											"Admin"
											),
									"ports"=>array(
											8080,
											8090
											),
									"hosts"=>array(
											"127.0.0.1"
											)
									),
							"controller"=>"\\controllers\\MaintenanceController",
							"action"=>"index",
							"title"=>"Maintenance mode",
							"icon"=>"recycle",
							"message"=>"Our application is currently undergoing sheduled maintenance.<br>Thank you for your understanding."
							)
					)
			)
	);