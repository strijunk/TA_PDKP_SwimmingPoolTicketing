<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation success!</title>
</head>
<style>
    body{
        font-family: 'Open Sans', Sans-serif, Arial;
        margin: 50px;
        padding: 30px;
        line-height: 30px;
        background: -webkit-linear-gradient(bottom, #a8a8da, #fefefe);
        background-repeat: no-repeat;
    }
    h3{
        family-font: Helvetica;
        font-weight: 50px;
    }
    .card{
        background: #ecf0f0;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 300px;
        margin: 6rem auto 8.1rem auto;
        width: 400px;
        padding: 20px;
    }
</style>
<body>
<div class="card">
    <h3>Swimming Pool E-ticket</h3>
    <?php
    include("SPT.php");
    for($i=0;$i<=40;$i++){
        echo"-"." ";
    }
    echo"<br>";
    echo"Yeay! Tiket Berhasil Dipesan!"."<br>";
    echo"Nama : "." ".$tkt->getNama()."<br>";
    echo"No ID :"." ".$tkt->getID()."<br>";
    echo"Kolam :"." ".$tkt->getKolam()."<br>";
    echo"Hari :"." ".$tkt->getHari()."<br>";
    echo"Jumlah tiket :"." ".$tkt->getJumlah()."<br>";
    echo"Total harga : "." ".$total."<br>";
    ?>
</div>
</body>
</html>