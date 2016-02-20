<?php
namespace Datablocks\entity;

class Project {

	
	public function __construct() {
	
	}
	public static function construct($array) {
		$obj = new Project ();
		$obj->setId ( $array ['id'] );
		$obj->setName ( $array ['name'] );
		$obj->setClasses ( $array ['Classes'] );
		return $obj;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getClasses() {
		return $this->Classes;
	}
	public function setClasses($Classes) {
		$this->Classes = $Classes;
	}
	public function toString() {
		return "  [id:" . $this->id . "]  [name:" . $this->name . "]  [Classes:" . $this->Classes . "]  ";
	}
}