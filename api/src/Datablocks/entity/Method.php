<?php

namespace Datablocks\entity;

/**
 * @Entity
 * @Table(name="method")
 */
class Method {
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
	private $title;
	/**
	 * @ManyToOne(targetEntity="ClassEntity")
	 * @JoinColumn(name="classentity_id", referencedColumnName="id")
	 */
	private $classEntity;
	
	/**
	 * @OneToMany(targetEntity="Method", mappedBy="method")
	 */
	private $param;
	/**
	 *
	 * @var string @Column(type="string", length=255)
	 */
	private $returnType;
	public function __construct($id = 0, $title = "", $param = [], $returnType = "",$classEntity = null) {
		$this->id = $id;
		$this->title = $title;
		$this->param = $param;
		$this->returnType = $returnType;
		$this->classEntity = $classEntity;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->title = $title;
	}
	public function getParam() {
		return $this->param;
	}
	public function setParam($param) {
		$this->param = $param;
	}
	public function getReturnType() {
		return $this->returnType;
	}
	public function setReturnType($returnType) {
		$this->returnType = $returnType;
	}
	public function getClassEntity() {
		return $this->classEntity;
	}
	public function setClassEntity($classEntity) {
		$this->classEntity = $classEntity;
	}
}