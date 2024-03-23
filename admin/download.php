<?php
// Lokasi folder tempat menyimpan foto-foto
$folderPath = '../assets/img/';

// Mendapatkan nama file foto dari parameter GET
if(isset($_GET['filename']) && !empty($_GET['filename'])) {
    $fileName = basename($_GET['filename']);

    // Path lengkap menuju file
    $filePath = $folderPath . $fileName;

    // Memastikan file yang akan didownload ada dan dapat diakses
    if(file_exists($filePath)) {
        // Mendapatkan tipe MIME file
        $fileType = mime_content_type($filePath);

        // Set header untuk force download
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $fileType);
        header('Content-Disposition: attachment; filename=' . $fileName);
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));

        // Membaca file dan menuliskannya ke output buffer
        readfile($filePath);
        exit;
    } else {
        echo 'File tidak ditemukan.';
    }
} else {
    echo 'Parameter file tidak valid.';
}
?>
