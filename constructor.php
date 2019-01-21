<?php 
	class A{
		function __construct($bar){
			echo $bar;
		}
		function foo(){
			echo "foo here";
		}
	}
	$myFirstObject = new A('test');
echo "<br/>";
	class B {
		public $bar;
		public function __construct ($bar)
		{
			$this->bar = $bar;
		}
		public function myPrint(){
			echo $this->bar;
		}
	}
	$myfirstObject = new B('test');
	$myfirstObject->myPrint();
	echo "<br/>";
	echo $myfirstObject->bar;

 ?>