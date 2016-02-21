<?php

namespace Datablocks;

class Config {
	public static $values = array (
			"database" => array (
					'dbname' => 'datablocks',
					'user' => 'root',
					'password' => '',
					'host' => 'localhost',
					'driver' => 'pdo_mysql' 
			),
			"path" => array (
					'Datablocks/entity' 
			) 
	)
	;
}
