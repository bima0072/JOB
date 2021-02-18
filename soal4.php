<?php 

for ($i=1; $i < 61 ; $i++) { 	
	if ( ($i % 3 == 0) && ($i % 5 == 0)) {
		echo "FooBar";
		echo "<br>";
	}elseif ($i % 5 == 0) {
		echo "Bar";
		echo "<br>";
	}elseif ($i % 3 == 0 ) {
		echo "Foo";
		echo "<br>";
	}
}


 ?>