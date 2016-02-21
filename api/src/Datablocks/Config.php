<?php

namespace Datablocks;

class Config {
	public static $values = array (
			"database" => array (
					'dbname' => 'datablocks',
					'user' => 'root',
					'password' => '123456',
					'host' => 'localhost',
					'driver' => 'pdo_mysql' 
			),
			"path" => array (
					'Datablocks/entity' 
			) 
	)
	;
}
