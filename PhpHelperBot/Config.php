<?php
namespace PhpHelperBot;

class Config{
	private $data;
	protected $err = [];
	public function __construct(array $data){
		$this->data = $data;
	}
public function __get($data){
		return isset($this->data[$key]) ? $this->data[$key] : null;

}
}