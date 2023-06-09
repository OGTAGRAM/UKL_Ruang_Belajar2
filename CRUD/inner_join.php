<?php
// Include database connection file
include_once("config.php");

// Perform inner join query
$query = "SELECT pertanyaan.id, pertanyaan.deskripsi AS pertanyaan_deskripsi, jawaban.deskripsi AS jawaban_deskripsi
          FROM pertanyaan
          INNER JOIN jawaban ON pertanyaan.id = jawaban.id_pertanyaan";

$result = mysqli_query($mysqli, $query);

// Check if the query is successful
if ($result) {
    // Display the joined data in a table
    echo "<table border='1'>
            <tr>
                <th>Pertanyaan ID</th>
                <th>Pertanyaan Deskripsi</th>
                <th>Jawaban Deskripsi</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['pertanyaan_deskripsi'] . "</td>";
        echo "<td>" . $row['jawaban_deskripsi'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    // Display an error message if the query fails
    echo "Error: " . mysqli_error($mysqli);
}

// Close database connection
mysqli_close($mysqli);
?>
