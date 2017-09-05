<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'ace');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // $query = "INSERT INTO table_name (column1, column2) VALUES ('value1', 'value2')";
    // mysqli_query($dbc, $query);

	// $query = "SELECT * FROM admins WHERE problem_id='$id'";
 //    $result = mysqli_query($dbc, $query);

 //    while ($row = mysqli_fetch_array($result)) {
 //        $user_id = $row['user_id'];
 //        echo "<tr>";
 //        echo "<td>".$user_id."</td>";
 //        echo "</tr>";
 //    }
?>