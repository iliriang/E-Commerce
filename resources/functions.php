<?php

//  DATABASE

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'omi';

$db = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

//  FUNCTIONS

function fetch_data($db, string $tableName, array $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY id DESC";
        $result = $db->query($query);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}

?>
