<?php
namespace Datablocks\entity;

use Datablocks\entity;
use Datablocks\core\AbstractEntity;
/**
 * @Entity
 * @Table(name="project")
 */
class Project extends AbstractEntity{

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
	 * @OneToMany(targetEntity="ClassEntity", mappedBy="project")
	 **/
	private $classes;
	
	public function __construct($id = 0, $name = "", $classes = array()) {
		$this->id = $id;
		$this->name = $name;
		$this->classes = $classes;
	}
	public static function construct($array) {
		$obj = new Project ();
		$obj->setId ( $array ['id'] );
		$obj->setName ( $array ['name'] );
		$obj->setClasses ( $array ['classes'] );
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
		return $this->classes;
	}
	public function setClasses($classes) {
		$this->classes = $classes;
	}
	public function toString() {
		return "  [id:" . $this->id . "]  [name:" . $this->name . "]  [Classes:" . $this->classes . "]  ";
	}
}