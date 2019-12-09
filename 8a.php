<!DOCTYPE html>
<html>
<head>
	<title>Cal</title>
</head>
<body>
	<?php
	    if(isset($_GET["submit"]))
	    {	
	    	$num1=$_GET["num1"];
	        $num2=$_GET["num2"];
	        $add=$num1+$num2;
	        $sub=$num1-$num2;
	        $mul=$num1*$num2;
            echo "num1+num2= ".$add;
	        echo "<br>";
	        echo "num1-num2= ".$sub;
	        echo "<br>";
	        echo "num1*num2= ".$mul;
	        echo "<br>";

	    if($num2>0)
	    {
	    	$div=$num1/$num2;
	    	echo "num1/num2= ".$div;
	    	echo "<br>";
	    }   
	    else
	    {
	    	echo"/ by zero error";
	    }
	}
	else
	{   
   ?>
	   <form>
	    <label>Enter the number1:</label>
	    <input type="text" name="num1"/><br>
	    <br>
	    <label>Enter the number 2:</label>
	    <input type="text" name="num2"/><br>
	    <input type="submit" name="submit" value="calculate"/>
	   </form>
       <?php } ?>
	 </body>
	 </html>   