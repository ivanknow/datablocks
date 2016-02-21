<?php

namespace Datablocks\dao;

use Datablocks\entity\ClassEntity;
use Datablocks\core\AbstractDAO;

class ClassDAO extends AbstractDAO {
	function __construct() {
		parent::__construct ( 'Datablocks\entity\ClassEntity' );
	}
	public function persist(ClassEntity $object) {
		parent::persist($object);
	}
	
	public function update(ClassEntity $object) {
		parent::update($object);
	}
	

}