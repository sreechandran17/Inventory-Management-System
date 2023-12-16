<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=inventory", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($_POST['submit'])){
  
  $query = "SELECT * FROM product where category='$category' ORDER BY productID ASC";
}

if(isset($form_data->search_query))
{
 
 $search_query = $form_data->search_query;
 $query = "
 SELECT * FROM product 
 WHERE (productName LIKE '%$search_query%' 
 OR productID LIKE '%$search_query%' 
 OR productQuantity LIKE '%$search_query%' 
 OR productCost LIKE '%$search_query%')"; 
 
}
else
{
 $query = "SELECT * FROM product ORDER BY productID ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>
