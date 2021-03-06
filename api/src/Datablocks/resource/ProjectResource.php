<?php

namespace Datablocks\resource;

use Datablocks\core\AbstractResource;
use Datablocks\dao\ProjectDAO;
use Datablocks\entity\Project;

class ProjectResource extends AbstractResource{
	public function __construct() {
		$this->setDao ( new ProjectDAO() );
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
		$project = new Project();
		$project->setName($json->name);
		$this->getDao ()->persist ( $project );
		return ["msg"=>"OK"];
	}
	public function put($id, $json) {
	}
	public function delete($id) {
	}
}