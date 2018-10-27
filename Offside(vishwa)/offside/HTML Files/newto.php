<?php
	$conn=mysqli_connect('localhost','root','','offside');
	$query="Select images from media where tid=11;";
	if(mysqli_query($conn,$query))
	{
		echo "Query executed";
	}
	$result=mysqli_query($conn,$query);
	echo(mysqli_num_rows($result));
	$i=0;
	$key = 'images';
	$r=mysqli_fetch_array($result);
	print_r($r);		 
$position = array_search($key, array_keys($r), true);
$values = array_values($r);

$previous = $values[$position - 1];
$next = $values[$position + 1];
    while($rows=mysqli_fetch_assoc($result))
    {
    	print_r($rows);
    	echo "<br>";
    	$next=next($rows);
    	if($next)
    			print_r($next);
    	else 
    		print_r("not haooenjn");
    	echo "<br>";
    }

	
?>