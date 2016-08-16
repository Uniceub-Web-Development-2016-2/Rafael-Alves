<?

class Request{
	private $method;
	private $protocol;
	private $server_ip;
	private $remote_ip;
	private $resource;
	private $parameter;

	public function __construct($method, $protocol, $server_ip, $remote_ip, $resource, $parameter){
		$this->method = $method;
		$this->protocol = $protocol;
		$this->server_ip = $server_ip;
		$this->remote_ip = $remote_ip;
		$this->resource = $resource;
		$this->parameter = $parameter;
		
	}

	public function __get($attribute){
	return $this->$attribute;
	}

	public function __set($attribute, $value){
		$this->$attribute = $value;
	}
}
