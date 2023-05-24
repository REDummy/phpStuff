<?php
$x = 10;
function index(){
    return Redirect::action('')
}

function printX(){
    global $x;
    echo $x;

}
printX();
echo "<br>";
echo $x;

echo "<br>";
$_GET["name"] = "mintChoco";
$_GET["nim"] = "727";
var_dump($_GET);

$mahasiswa = [
    [
    "nrp" => "043040023",
    "nama" => "Sandhika Galih",
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "sandhika.jpeg"
    ],[
    "nama" => "Doddy Ferdiansyah",
    "nrp" => "033040001",
    "email" => "doddy@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "doddy.jpg"
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dfr</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?> 
    </ul>
   
</body>
</html>