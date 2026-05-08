<!DOCTYPE html>
<html>
<head>
    <title>PHP Dasar</title>
    <style>
        body{
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .box{
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            color: darkblue;
        }

        p{
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Biodata Sederhana</h2>

    <?php
        $nama = "Farhan hadi";
        $umur = 17;
        $kelas = "XI RPL";
        $hobi = "bermain bola";
    ?>

    <p><b>Nama:</b> <?php echo $nama; ?></p>
    <p><b>Umur:</b> <?php echo $umur; ?> Tahun</p>
    <p><b>Kelas:</b> <?php echo $kelas; ?></p>
    <p><b>Hobi:</b> <?php echo $hobi; ?></p>

</div>

</body>
</html>