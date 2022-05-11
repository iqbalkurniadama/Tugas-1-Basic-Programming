<?php

function hitvocal($name)
{
    $arr = str_split($name);
    $vocal = ['a', 'i', 'u', 'e', 'o'];

    $found = array_intersect($vocal, $arr);
    $count = array_count_values($arr);

    $result = [];

    foreach ($found as $item) {
        $result[$item] = $count[$item];
    }

    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hitung Vokal</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
      <section>
        <div class="form">
          <div class="container">
            <div class="heading2">
              <h1>Hitung Vokal</h1>
            </div>
            <form method="POST" action="<?php $PHP_SELF ?>">
              <label>Masukkan Nama</label>
              <input type="text" name="name"/>
              <input class="submit" type="submit" value="Submit" />
            </form>
            <h3>Hasil : </h3>
          </div>
        </div>
        <?php if ($_POST && isset($_POST['name'])) : ?>
        <?php
        $xx = 0;
        $yy = [];
        echo $_POST['name'] . " = ";
        foreach (hitvocal($_POST['name']) as $huruf => $jumlah) {
            array_push($yy, $huruf);
            $xx +=  $jumlah;
        }
        echo $xx . " yaitu ";
        foreach (hitvocal($_POST['name']) as $huruf => $jumlah) {
            echo " " . $huruf;
        }
        ?>
        <?php endif ?>
      </section>
    </div>
  </body>
</html>