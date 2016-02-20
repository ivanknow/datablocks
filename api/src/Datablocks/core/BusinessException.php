<?php

namespace Datablocks\core;
use Exception;

class BusinessException extends Exception {
	public $mensagem;
	public function __construct($mensagem) {
		$this->mensagem = $mensagem;
	}
}