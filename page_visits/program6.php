<?php
 $user = "Thunder Emperor";
?>
<!DOCTYPE html>
<html>
<head> 
<title> program 6 </title>
<style>
h2,h3,p{
	color:white;
}
</style>	
</head>
<body style ="background-color:dodgerblue">
<h2 style="text-align:center"> <?php echo $user; ?>,Welcome to Sample PHP Script </h2>
<?php
 print "<h3> REFRESH PAGE </h3>";
 $name="counter.txt";
 $file = fopen($name,"r");
 $hits = fscanf($file,"%d");
 fclose($file);
 $hits[0]++;
 $file = fopen($name,"w");
 fprintf($file,"%d",$hits[0]);
 fclose($file);
?>
<p>Number of users visited this page: <?php echo $hits[0]; ?></p>

</body>
</html>