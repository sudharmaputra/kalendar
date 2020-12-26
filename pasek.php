<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Kalender Wariga Belog</title>
</head>

<body>

    <?php
    @include "mesin.php";
    @include "mesin-besok.php";
    @include "jam-baik.php";
       
        $tanggal_saya = 8;
        $bulan_saya = 9;
        $tahun_saya = 1988;

        $tanggal_H = date("d");
        $tanggal_HB = date("d")+1;
        $bulan_H = date("m");
        $tahun_H = date("Y");

        // CEK URIP HARI INI
        $shi = total_urip($tanggal_saya, $bulan_saya, $tahun_saya, $tanggal_H, $bulan_H, $tahun_H);
        // CEK URIP HARI BESOK
        $shib = total_urip_besok($tanggal_saya, $bulan_saya, $tahun_saya, $tanggal_HB, $bulan_H, $tahun_H);

    ?>


    <div class="container">
        <div class="text-center">
            <img src="" alt="">
            <h1>Kanca Teknik</h1>
            <p>Jl. Mudu Taki No.88X, Dalung, <br>Kec. Kuta Utara, Kabupaten Badung</p>
            <p class="text-info">
                <?php echo hitung_saptawara($tanggal_H, $bulan_H, $tahun_H)." (".hitung_pancawara($tanggal_H, $bulan_H, $tahun_H).", Urip ".hitung_urip($tanggal_H, $bulan_H, $tahun_H)."), ".date("d M Y") ?>
            </p>
        </div>
    </div>

    <!-- PASEK -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div
                    class="card text-white <?php if($shi == 1 or $shi == 2){echo "bg-info";}else {echo "bg-danger";} ?>">
                    <div class="card-header">
                        <p class="text-uppercase header-nama">Gede Pasek
                            (<?php echo hitung_urip($tanggal_saya, $bulan_saya, $tahun_saya) ?>)</p>
                        <p class="tanggal-lahir">Tanggal lahir
                            <?php echo hitung_saptawara($tanggal_saya, $bulan_saya, $tahun_saya)." - ".hitung_pancawara($tanggal_saya, $bulan_saya, $tahun_saya)?>,
                            08 September</p>
                    </div>

                    <div class="card-body card-hari-ini">
                        <strong>Hari Ini</strong>

                        <?php if($shi == 1 or $shi == 2){?>
                        <h3 class="text-uppercase">Baik</h3>
                        <?php }else{?>
                        <h3 class="text-uppercase">Tidak Baik</h3>
                        <?php } ?>

                        <p>
                            Ambil keputusan hari ini di jam yang tepat
                            <strong><?php echo jam_baik($tanggal_H, $bulan_H, $tahun_H) ?></strong>
                        </p>
                    </div>
                    <hr>
                    <div
                        class="card-body card-besok <?php if($shib == 1 or $shib == 2){echo "bg-info";}else {echo "bg-danger";} ?>">
                        <strong>Hari Besok</strong>
                        <?php if($shi == 1 or $shi == 2){?>
                        <h3 class="text-uppercase">Baik</h3>
                        <?php }else{?>
                        <h3 class="text-uppercase">Tidak Baik</h3>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>



</body>

</html>