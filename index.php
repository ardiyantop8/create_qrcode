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
        $kode = "ardiqrcode"."b412ay";
        require_once('assets/phpqrcode/qrlib.php');
        QRcode::png("$kode", "kode"."1".".png","M",6,6);
    ?>
    <h1>
        <img src="kode1.png" alt="">
    </h1>
</body>
</html>