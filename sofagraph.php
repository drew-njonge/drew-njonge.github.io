<?php
include_once ('./include.php');
include_once ('./graph/phpgraphlib.php');
include_once ('./graph/phpgraphlib_pie.php');
$graph=new PHPGraphLibPie(450,280);
$dataArray=array();

$sql="SELECT id,name, COUNT(*) AS 'count' FROM tvstand
GROUP BY name";
$result=mysql_query($sql) or die ('Query failed:'.mysql_error());
if ($result){
	while($row=mysql_fetch_assoc($result)){
	$name=$row["name"];
	$count=$row["count"];


	$dataArray[$name]=$count;	
}
}
$graph->addData($dataArray);
$graph->setTitle("TV stand Purchased per Customer");
$graph->setLabelTextColor("blue");
$graph->createGraph();


?>