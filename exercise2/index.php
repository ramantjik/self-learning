<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// pritn_r --> untuk debugging
// var_dump --> untuk debugging

// echo "Rahadian Amantjik";

// print "  Moch. Rahadian Amantjik";

// print_r("  Amantjik");

// var_dump("  Moch. Rahadian Amantjik");

// echo 45;

// Penulisan sintaks PHP
// 1. PHP di dalam HTML --> bertujuan untuk menambahkan variabel pada HTML agar lebih dinamis
// 2. HTML di dalam PHP --> tidak disarankan


// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tetapi boleh menggunakan angka
// $nama = "Rahadian Amantjik"


// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;


// Penggabung string / concatenation / concat
// .
// $nama_depan = "Rahadian";
// $nama_belakang = "Amantjik";
// echo $nama_depan . " " . $nama_belakang


// Assignment
// =, +=, -=, *=, /=, %=, .=


// Perbandingan
// <, >, <=, >=, == --> hanya mengecek nilainya, bukan tipe datanya
var_dump(1>5);


// Identitas
// ===, !== --> mengecek tipe datanya juga


// Logika
// &&, ||, !  (dan, atau, tidak)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>
</body>
</html>


