<?php
namespace PhpHelperBot;

class Config{
	protected $data;
	public function __construct(array $data){
		$this->data = $data;
	}
public function __get($data){
	return isser($this->data[$key]) ? $this->data[$key] : null;
}
}