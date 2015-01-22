<?php

namespace Foreword\phpMorphyLang_en_EN;

class phpMorphyLang_en_EN {
	protected $dir = null;
	protected $lang = 'en_EN';

	public function __construct(){
		$this->dir = __DIR__;
	}

	public function __get($var){
		if(!property_exists($this, $var)){
			throw new \LogicException("Cannot access undefined property `".__CLASS__."::\$$var`");
		}

		switch($var){
			case 'dir':
			case 'lang':
				return $this->$var;
		}

		throw new \LogicException("Cannot access protected property `".__CLASS__."::\$$var`");
	}
}
