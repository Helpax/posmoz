<?php

namespace Hcode;

use Rain\Tpl;

class Page {
	
	private $tpl;
	private $options = [];
	private $defaults = [
		"header"=>true,
		"footer"=>true,
		"data"=>[]
	];
	
	function __construct($opts = array(),$tlp_dir = "/views/"){
		
		//$this->defaults["data"]["session"] $_SESSION;
		
		$this->options = array_merge($this->defaults, $opts);
		
			//$_SERVER["DOCUMENT_ROOT"] traz a pasta onde esta o root
		$config = array(
					"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tlp_dir,
					"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
					"debug"         => false // set to false to improve the speed
				   );
		
		Tpl::configure( $config );
		
		$this->tpl = new Tpl;
		
		$this->setData($this->options["data"]);
		
		if($this->options["header"] === true){
			$this->tpl->draw("header");
		}
		
	}
	
	private function setData($data = array()){
		foreach ($data as $key => $value){
			$this->tpl->assign($key, $value);
		}
		
	}
	
	
	
	public function setTpl($name, $data = array(), $returnHTML = false){
		
		$this->setData($data);

		$tpl = new Tpl;
			// assign a variable
			$tpl->assign( "name", "Ola Mundo!!!" );
		
		return $this->tpl->draw($name, $returnHTML);
		
	}
	
	
	public function __destruct(){
		
		if($this->options["footer"] === true){
			$this->tpl->draw("footer");
		}
		
	}
	
}

?>




