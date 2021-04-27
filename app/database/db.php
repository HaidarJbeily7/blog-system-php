<?php

include('connect.php');

 function SelectAll($table)
{
    global $conn;
    $stmt = "select * FROM  $table";
    $result = mysqli_query($conn, $stmt);
    $array = mysqli_fetch_assoc($result);
    return $array;
}
function SelectOne($table, $conditions)
{
    global $conn;
    $stmt = "select * FROM  $table";
    // for ($conditions as $keys => )
}



function excuteQuery($sql, $data)
{
    global $conn;
    $query = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s',count($values));
    $query->bind_param($types, ...$values);
    $query->execute();
    return $query;

}
function getUserById($id)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE 'id'=$id LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		// returns user in an array format: 
		// ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
		return $user; 
	}


     // escape value from form
     function esc(String $value)
     {	
         // bring the global db connect object into function
         global $conn;

         $val = trim($value); // remove empty space sorrounding string
         $val = mysqli_real_escape_string($conn, $value);

         return $val;
     }