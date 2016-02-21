<?php

namespace Datablocks\dao;

use Datablocks\entity\Project;
use Datablocks\core\AbstractDAO;

class ProjectDAO extends AbstractDAO {
	function __construct() {
		parent::__construct ( 'Datablocks\entity\Project' );
	}
	public function persist(Project $object) {
		parent::persist($object);
	}
	
	public function update(Project $object) {
		parent::update($object);
	}
	

}