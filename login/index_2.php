<!DOCTYPE html>
<html>
    <head>
        <title>Kuis</title>
    </head>
    <body>
    <?php
        try {
            $pdo = include "koneksi.php";
            $query = $pdo->prepare("select * from pertanyaan order by rand() limit 50");
            $query->execute();
            $pertanyaan = $query->fetchAll(PDO::FETCH_OBJ);

            foreach ($pertanyaan as $i => $q) { ?>
                <div>
                    <div>
                        <h4><?= $i+1 ?>. <?= $q->deskripsi?></h4>
                        <?php   $query2 = $pdo->prepare("select * from jawaban where id_pertanyaan = :id_pertanyaan order by rand()"); 
                                $query2->execute(array("id_pertanyaan" => $q->id));
                                $jawaban = $query2->fetchAll(PDO::FETCH_OBJ); 
                                
                                foreach($jawaban as $a) {?>
                                    <div>
                                        <input type="radio" name="jawaban<?= $q->id ?>" value="<?= $a->id?>"/>
                                        <?= $a->deskripsi; ?>
                                    </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }
        }
        catch(Exception $e) {
            echo "Gagal menampilkan pertanyaan. ";
            echo "Error: ".$e->getMessage();
        }
// Include database connection file
include_once("config.php");

// Get user input
$userAnswer = $_POST['jawaban']; 

// Query untuk mendapatkan skor jawaban yang sesuai dengan jawaban user
$query = "SELECT skor FROM jawaban WHERE deskripsi = '$userAnswer'";
$result = mysqli_query($mysqli, $query);

// Check if the query is successful
if ($result) {
    // Mengambil data skor dari hasil query
    $row = mysqli_fetch_assoc($result);
    $skorJawaban = $row['skor'];

    // Menampilkan hasil perhitungan
    echo "Skor Jawaban Anda: " . $skorJawaban;
} else {
    // Menampilkan pesan error jika query gagal
    echo "Error: " . mysqli_error($mysqli);
}

// Close database connection
mysqli_close($mysqli);
?>

    ?>
    </body>
</html>