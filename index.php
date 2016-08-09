<?php

class Request{
	private $protocol;
	private $ip;
	private $resource;
	private $metodo;
	private $parametro;


	public function __construct($protocol, $ip, $resource, $metodo, $parametro)
	{
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->resource = $resource;
		$this->metodo = $metodo;
		$this->parametro = $parametro;
	}

	public function __get($atributo){
		return $this->$atributo;
		}

	public function __set($atributo, $value){
		$this->$atributo = $value;
	}

	public function toString(){
		$request = $this->protocol.'://'.$this->ip.'/'.$this->resource.'/'.$this->metodo.'/';

                foreach($this->parametro as $key=>$value)
                        {
				$request = $request.$key."=".$value."&";
                        }
		
                return $request;
		
	} 

}

$request = new Request("http", "192.168.0.1","marca", "GET", array("modelo" => "boeing", "preco" => "3bil", "parafuso" => "rivets"));
//substr($request,0,-1);
echo $request->toString();





?>

