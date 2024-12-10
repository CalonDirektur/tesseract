<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

// Ganti dengan path ke gambar yang ingin Anda proses
$imagePath = 'image/image.jpg'; // Pastikan path ini benar

// Menggunakan Tesseract untuk mengenali teks
$text = (new TesseractOCR($imagePath))->run();

echo "Teks yang dikenali: " . $text;
