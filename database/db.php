<?php
require('conn.php');

if($conn->connect_error) {
    die("Database connection error: " . $conn->connect_error);
}

function execute_query($query, $data) {
    global $conn;
    $statement = $conn->prepare($query);
    $values = array_values($data);
    $types = str_repeat("s", count($values));
    $statement->bind_param($types, ...$values);
   $statement->execute();
   return $statement;
  }

// delete function
function delete($table, $id) {
    global $conn;
    $query = "DELETE FROM $table WHERE id=?";
    // $query = "UPDATE $table SET ";

    $statement = execute_query($query, ["id" => $id]);
    return $statement->affected_rows;
}

// update function
function update($table, $id, $data) {
    global $conn;
    //$query UPDATE users SET admin=?, username=?, password=?, email= WHERE id=?;
    $query = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) { 
           $query = $query . " $key=?";
        } else {
        $query = $query . ", $key=?";
        }
        $i++;
    }

    $query = $query . " WHERE id=?";
    $data["id"] = $id;
    $statement = execute_query($query, $data);
    return $statement->affected_rows;
}

