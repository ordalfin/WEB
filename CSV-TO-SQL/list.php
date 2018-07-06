<?php
include('conn.php');
$q = "SELECT * FROM active ORDER BY id ASC";
$sql = mysqli_query($conn, $q);
?>
<form action="action.php?act=delete" method="post">
    Player List :
    <table cellpadding="5" style="text-align: center;">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>GENDER</th>
            <th>MAJOR</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
        </tr>
        <?php
        if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_assoc($sql)) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['major']; ?></td>
                    <td><?= $row['address']; ?></td>
                    <td><?= $row['phone']; ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <input type="submit" value="Delete selected ?">
</form>
