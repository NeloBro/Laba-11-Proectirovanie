<?php 

class abc 
{
	public $a;
	public $b;
	public $c;

	function __construct($aa, $bb, $cc) {
		$this->a = $aa;
		$this->a = (int)$this->a;
		$this->b = $bb;
		$this->b = (int)$this->b;
		$this->c = $cc;
		$this->c = (int)$this->c;
	}

	function calc() {
		return $this->a*$this->b+$this->c;
	}
}

$class = new abc($_POST['a'],$_POST['b'],$_POST['c']);

echo $class->calc();

?>