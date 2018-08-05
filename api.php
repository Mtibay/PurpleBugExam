<?php
include ('con.php');
	
// $sql = "Select * From orders";
$sql ="SELECT * FROM `orders` WHERE id=(SELECT MAX(id) FROM `orders`)";
$result = $conn->query($sql); 
$orders = array(); 
foreach ($result as $value) {
	$orders[] = array(
		'Bread'=>$value['Bread'],
		'Sauce'=>$value['Sauce'],
		'Sandwich'=>$value['Sandwich'],
		'Chese'=>$value['Chese'],
		'Veggies'=>$value['Veggies'],
		'Full_Name'=>$value['Full_Name']
	);
} 

echo json_encode($orders);


// $sql = "Select * From orders";
// $result = $conn->query($sql);  
// foreach ($result as $value) {
// 	echo $value['Bread'] . '<br>';
// }

// 	if (mysqli_query($conn, $sql)) {
//   $bread = $_POST['Bread'];
//   $sauce = $_POST['Sauce'];
//   $swt = $_POST['Sandwich'];
//   $chese = $_POST['Chese'];
//   $veggies = $_POST['Vegiies'];
// 	$name = $_POST['Full_Name']; 
// } else {
//     echo "Error: " . $sql . mysqli_error($conn);
// }


// function sample_api(){
// 	$student = 
// 		array('FullName' => $name, 'Bread' => $bread, 'Suace' => $sauce, 'Sandwich Type' => $swt,
// 		 'Chese' => $chese, 'Veggies' => $veggies);

// 	echo json_encode($student);
// }

// sample_api();

?>