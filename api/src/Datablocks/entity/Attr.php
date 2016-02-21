<?php

namespace Datablocks\entity;

/**
 * @Entity
 * @Table(name="attr")
 */
class Attr {
	
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
	 * @ManyToOne(targetEntity="ClassEntity")
	 * @JoinColumn(name="classentity_id", referencedColumnName="id")
	 */
	private $classEntity;
	/**
	 *
	 * @var string @Column(type="string", length=255)
	 */
	private $access;
	/**
	 *
	 * @var string @Column(type="boolean")
	 */
	private $get;
	/**
	 *
	 * @var string @Column(type="boolean")
	 */
	private $set;
	/**
	 *
	 * @var string 
	 * @Column(type="string", length=255)
	 */
	private $type;
	
	public function __construct($id = 0, $name = 0, $access = 0, $get = 0, $set = 0,$type="", $classEntity = null) {
		$this->id = $id;
		$this->name = $name;
		$this->access = $access;
		$this->get = $get;
		$this->set = $set;
		$this->type = $type;
		$this->classEntity = $classEntity;
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
	public function getAccess() {
		return $this->access;
	}
	public function setAccess($access) {
		$this->access = $access;
	}
	public function getGet() {
		return $this->get;
	}
	public function setGet($get) {
		$this->get = $get;
	}
	public function getSet() {
		return $this->set;
	}
	public function setSet($set) {
		$this->set = $set;
	}
	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->type = $type;
	}
	public function getClassEntity() {
		return $this->classEntity;
	}
	public function setClassEntity($classEntity) {
		$this->classEntity = $classEntity;
	}
}