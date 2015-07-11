<?php
/**
 * 新闻类别类
 */
class type {
	private $id;
	private $name;

	function _construct($name){
		$this->id=$id;
		$this->name=$name;
	}
    public function __toString() {
        return __CLASS__ . ": [{$this->id}]: {$this->name}\n";
    }
    
	function getId(){
		return $this->id;
	}
	function setId($id){
		$this->id=$id;
	}
	function getName(){
		return $this->name;
	}
	function setName($name){
		$this->name=$name;
	}
}
?>