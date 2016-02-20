<?php

namespace Datablocks\core;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Datablocks\Config;

abstract class AbstractDAO {
	private $repo;
	/**
	 *
	 * @var \Doctrine\ORM\EntityManager
	 */
	private $entityManager = null;
	public function __construct($repo) {
		$this->repo = $repo;
		$this->entityManager = $this->createEntityManager ();
	}
	public function persist($object) {
		$this->entityManager->persist ( $object );
		$this->entityManager->flush ();
	}
	public function update($object) {
		$this->getEntityManager ()->merge( $object );
		$this->getEntityManager ()->flush ();
	}
	public function findById($id) {
		$data =  $this->entityManager ->find ($this->repo , $id ) ;
		return $data;
	}
	public function findAll($object=null) {
		$collection = $this->entityManager ->getRepository ( $this->repo )->findAll ();
		
		$data = array ();
		foreach ( $collection as $obj ) {
			$data [] = $obj;
		}
		
		return $data;
	}
	public function delete($object) {
		$this->entityManager->remove ( $object );
		$this->entityManager->flush ();
	}
	public function createEntityManager() {
		
		$devMode = true;
		
		$config = Setup::createAnnotationMetadataConfiguration ( Config::$values['path'], $devMode );
		
		$connectionOptions =  Config::$values ['database'];
		
		return EntityManager::create ( $connectionOptions, $config );
	}
	public function getEntityManager(){
		return $this->entityManager;
	}
	abstract public function validateType($obj);
}