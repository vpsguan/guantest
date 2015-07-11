<?php
/**
 * 新闻类
 */
class news {
	private $id;
	private $title;
	private $content;
	private $typeid;
	private $time;

	function _construct($title,$content,$typeid,$time) {
		$this->title=$title;
		$this->content=$content;
		$this->typeid=$typeid;
		$this->time=$time;
	}
    public function __toString() {
        return __CLASS__ . ": [{$this->id}]: {$this->title}\n";
    }
	function getId(){
		return $this->id;
	}
	function setId($id){
		$this->id=$id;
	}
	function getTitle(){
		return $this->title;
	}
	function setTitle($title){
		$this->title=$title;
	}
	function getContent(){
		return $this->content;
	}
	function setContent($content){
		$this->content=$content;
	}
	function getTypeid(){
		return $this->typeid;
	}
	function setTypeid($typeid){
		$this->typeid=$typeid;
	}
	function getTime(){
		return $this->time;
	}
	function setTime($time){
		$this->time=$time;
	}	
}
?>