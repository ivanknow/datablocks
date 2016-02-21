<?php

namespace Datablocks\entity;

use Datablocks\core\AbstractEntity;
/**
 * @Entity
 * @Table(name="classentity")
 */
class ClassEntity extends AbstractEntity{
	
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
	 * @ManyToOne(targetEntity="Project")
	 * @JoinColumn(name="project_id", referencedColumnName="id")
	 */
	private $project;
	/**
	 * @OneToMany(targetEntity="Attr", mappedBy="classEntity")
	 */
	private $attrs;
	/**
	 * @OneToMany(targetEntity="Method", mappedBy="classEntity")
	 */
	private $methods;
	public function __construct($id = 0, $name = 0, $attrs = array(), $methods = array(), $project = null) {
		$this->id = $id;
		$this->name = $name;
		$this->attrs = $attrs;
		$this->methods = $methods;
		$this->project = $poject;
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
	public function getAttrs() {
		return $this->attrs;
	}
	public function setAttrs($attrs) {
		$this->attrs = $attrs;
	}
	public function getMethods() {
		return $this->methods;
	}
	public function setMethods($methods) {
		$this->methods = $methods;
	}
	public function getProcject() {
		return $this->procject;
	}
	public function setProcject($procject) {
		$this->procject = $procject;
	}
}