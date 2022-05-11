<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Ganjil Genap</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<section>
    <div class="form">
        <div class="container">
            <div class="heading2">
                <h2>Cetak Angka Ganjil Genap</h2>
            </div>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label>Masukkan Angka Pertama</label>
                <input type="number" name="bil1"/>
                <label>Masukkan Angka Kedua</label>
                <input type="number" name="bil2"/>
                <input class="submit" type="submit" value="Submit" />
            </form>
            <h3>Hasil : </h3>
        </div>
    </div>
</section>
</div>

<?php
$tampil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];

    $range = range($bil1, $bil2);
 ?>
<div class="text-center">

    <?php
    foreach ( $range as $number){
        if($number % 2 == 0){
            echo "Angka $number adalah genap <br>";
        }
        else {
            echo "Angka $number adalah ganjil <br>";
        }
    }
    ?>
</div>
<?php
}
?>
</body>
</html>
