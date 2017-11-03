<?php

    require_once 'NotORM.php';
	$base_folder = "genova/"; //site folder
    $GLOBALS['APP_CONFIG'] = array(
		"PARAMS" => array(
			"DB" => array(
                "sv" => 'localhost',
                "us" => 'postgres',
                'pw' => 'postgres',
                'db' => 'jumrock'
            ),
            "APP" => array(
                "name" => "Genova Insurance",
                "version" => "<i>Version:</i> alpha",
                "path" => $base_folder ."cia/",
                "assets" => $base_folder ."assets/",
				"templates" => $base_folder ."cia/ext/",
				"sys" => $base_folder ."sys/",
                'authmethod' => 1, //1 for local, 2 for Active directory
                'ldap' => "LDAP://172.15.5.24",
                'dc' => "DC=wapicinsuranceplc,DC=com",
                'domain' => "wapic",
                'index' => 'index',
                'logo' => $base_folder ."cia/img/logo.png",
                'imageURL' => $base_folder ."cia/userImages",
                'session_timeout' => '22000',
				'money_format' => 1 ,
                'currency_position' => 1,
				'time_zone' => 'Africa/Accra'
            ),
            "LOG" => array(
                'log' => 'true' ,
                'logfile' => 'errors.log' ,
                'mail' => 'stephen.ameyaw@shrinqghana.com' ,
                'redirect' => 'err.php',
                'show' => 'false',
            ),
            "EMAIL" => array(
                'SMTP' => 'mail.shrinqghana.com',
                'sendFrom' => 'no-reply@genovainsurance.com',
                'ContentType' => 'text/html',
            )
        ),
    );

    CONST ENV = "PARAMS";


	$which_env = 0; // change to 1 for local
	if($which_env){ 
		$GLOBALS['APP_CONFIG'][ENV]["DB"]['sv'] = "localhost";
	}
    date_default_timezone_set($GLOBALS['APP_CONFIG'][ENV]["APP"]['time_zone']);

    $db = new PDO(
            "pgsql:host=".$GLOBALS['APP_CONFIG'][ENV]["DB"]['sv'].
            ";dbname=".$GLOBALS['APP_CONFIG'][ENV]["DB"]['db']."",
            $GLOBALS['APP_CONFIG'][ENV]["DB"]['us'],
            $GLOBALS['APP_CONFIG'][ENV]["DB"]['pw']);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $orm = new NotORM($db);

?>
