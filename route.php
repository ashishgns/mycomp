<?php 

class Route {

	private $_uri = [];
	private $_method = [];

	public function add($uri, $method = null) {
		$this->_uri[] = '/' . trim($uri, '/');

		if ($method != null) {
			$this->_method[] = $method;
		}
	}

	public function submit() {
		$uri = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
		foreach($this->_uri as $k => $v) {
			// if (preg_match("#^$v#", $uri)) {
			if (strtolower($v) == strtolower($uri)) {
				// if (is_string($this->_method[$k])) {
				// 	$method = $this->_method[$k];
				// 	new $method();
				// } else {
				// 	call_user_func($this->_method[$k]);
				// }
				$m = explode('@', $this->_method[$k]);
				$n = $m[1];
				(new $m[0]())->$n();
			}
		}
	}
}