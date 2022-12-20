<?php
class xClass 
{
	public $x;

	function __construct($xx) {
		$this->$x = $xx;
		$this->$x = (int)$this->$x;
	}

	function calc() {
		if($this->$x<=3) {
			return pow($this->$x, 2)-3*$this->$x+9;
		}
		if($this->$x>3) {
			return pow($this->$x, 3)+6;
		}
	}
}

$class = new xClass($_POST['x']);
echo $class->calc();

?>