<?php

namespace Datablocks\resource;

use Datablocks\core\AbstractResource;
use Datablocks\dao\ClassDAO;
use Datablocks\entity\ClassEntity;

class ClassResource extends AbstractResource{
	public function __construct() {
		$this->setDao ( new ClassDAO() );
	}
	public function get($id) {
		if ($id === null) {
			$data = array ();
			$result = $this->getDao()->findAll ();
				
			foreach ( $result as $obj ) {
				$data [] = $obj->toArray ();
			}
		} else {
			$project = $this->getDao ()->findById ($id);
			if ($project != null) {
	
				$data = $project->toArray ();
				
			} else
				$data = null;
		}
		
		return $data;
	}
	public function post($json) {
		$classEntity = new ClassEntity();
		$classEntity->setName($json->name);
		$this->getDao ()->persist ( $classEntity );
		return ["msg"=>"OK"];
	}
	public function put($id, $json) {
	}
	public function delete($id) {
	}
}