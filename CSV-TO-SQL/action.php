<?php
include('conn.php');

$sql = "INSERT into active VALUES ";
for ($total = 1; $total < $_POST['total']; $total++) {
    if (($total + 1) == $_POST['total']) {
        $sql .= "('" . $_POST['nrp' . $total] . "','" . $_POST['name' . $total] . "','" . $_POST['gender' . $total] . "','" . $_POST['major' . $total] . "','" . $_POST['address' . $total] . "','" . $_POST['phone' . $total] . "');";
    } else {
        $sql .= "('" . $_POST['nrp' . $total] . "','" . $_POST['name' . $total] . "','" . $_POST['gender' . $total] . "','" . $_POST['major' . $total] . "','" . $_POST['address' . $total] . "','" . $_POST['phone' . $total] . "'),";
    }
}
//echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "Data imported successfully <br><br>";
    echo "<a href='list.php' style='text-decoration: none'> &laquo; back</a>";
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>