<?php

namespace Datablocks\core;

abstract class AbstractEntity {

	public function getAvoidedFields(){
		return array();
	}
	public function toArray() {
		$temp = ( array ) $this;
		
		$array = array ();
		
		foreach ( $temp as $k => $v ) {
			$k = preg_match ( '/^\x00(?:.*?)\x00(.+)/', $k, $matches ) ? $matches [1] : $k;
			if (in_array($k,$this->getAvoidedFields())){
				$array [$k] = "";
			}else{
				
				if(!is_object($v)){
					$array [$k] = $v;
				}else{
					if($v instanceof AbstractEntity){
						$array [$k] = $v->toArray();
					}else{
						$array [$k] = $v;
					}
				}
			}
			
		}
		
		return $array;
	}
}