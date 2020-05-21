<?php

require 'db_conn.php';

$sql = "SELECT * FROM yds2_recommend";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
        <tr>
            <th>序号<th>
            <th>书名</th>
            <th>邮箱</th>
            <th>理由</th>
            <th>时间</th>
        </tr>";

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['book_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['reason'] . "</td>";
        echo "<td>" . $row['rem_time'] . "</td>";
        echo "</tr>";
    }
}

?>