<?php

namespace Datablocks\core;

abstract class AbstractResource {
	//attr
	private $dao;
	
	public function __construct() {
		
	}
	//get and set
	public function getDao() {
		return $this->dao;
	}
	public function setDao($dao) {
		$this->dao = $dao;
	}
	//request
	abstract public function get($id);
	abstract public function post($json);
	abstract public function put($id,$json);
	abstract public function delete($id);
}
