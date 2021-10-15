<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create QRCode</title>
</head>
<body>
    <?php
    /* INISIASI UNTUK ISI QRCODE */ 
        $kode = "ardiqrcode"."b412ay";
    /* TUTUP INISIASI UNTUK ISI QRCODE */
        
    /*PEMANGGILAN LIBRARY QRCODE */
        require_once('assets/phpqrcode/qrlib.php');
    /*TUTUP PEMANGGILAN LIBRARY QRCODE */

     /*FORMAT QRCODE DAN PENAMAAN QRCODE PNG DAN UKURANYA */
        QRcode::png("$kode", "kode"."1".".png","M",6,6);
     /*TUTUP FORMAT QRCODE DAN PENAMAAN QRCODE PNG DAN UKURANYA */
    ?>
    <h1>

        <!-- Menampilkan qrcode -->
        <img src="kode1.png" alt="">
    </h1>
</body>
</html>