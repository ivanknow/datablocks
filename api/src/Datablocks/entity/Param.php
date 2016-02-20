<?php

namespace Datablocks\entity;

/**
 * @Entity
 * @Table(name="param")
 */
class Param {
	/**
	 *
	 * @var integer @Id
	 *      @Column(name="id", type="integer")
	 *      @GeneratedValue(strategy="AUTO")
	 */
	private $id;
	/**
	 *
	 * @var string @Column(type="string", length=255)
	 */
	private $name;
	/**
	 *
	 * @var string @Column(type="string", length=255)
	 */
	private $type;
	/**
	 * @ManyToOne(targetEntity="Method")
	 * @JoinColumn(name="method_id", referencedColumnName="id")
	 */
	private $method;
	
	public function __construct($id = 0, $name = "", $type = "",$method = null) {
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
		$this->method = $method;
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
	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->type = $type;
	}
	public function getMethod(){
		return $this->method;
	}
	
	public function setMethod($method){
		$this->method=$method;
	}
	
}
