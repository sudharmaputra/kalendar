<?php
 function hitung_p_besok($tanggal, $bulan, $tahun){
    // PENGECEKAN TAHUN KABISAT
    $cek_tahun = $tahun%4;
    if ($cek_tahun == 0){
        $februari = 29;
    }else {
        $februari = 28;
    }

    // JUMLAH HARI
    if($bulan == "01"){
        $p = $tanggal;
    }elseif($bulan == "02"){
        $p = 31 + $tanggal;
    }elseif($bulan == "03"){
        $p = 31 + $februari + $tanggal;
    }elseif($bulan == "04"){
        $p = 62 + $februari + $tanggal;
    }elseif($bulan == "05"){
        $p = 92 + $februari + $tanggal;
    }elseif($bulan == "06"){
        $p = 123 + $februari + $tanggal;
    }elseif($bulan == "07"){
        $p = 153 + $februari + $tanggal;
    }elseif($bulan == "08"){
        $p = 184 + $februari + $tanggal;
    }elseif($bulan == "09"){
        $p = 215 + $februari + $tanggal;
    }elseif($bulan == "10"){
        $p = 245 + $februari + $tanggal;
    }elseif($bulan == "11"){
        $p = 276 + $februari + $tanggal;
    }else{
        $p = 306 + $februari + $tanggal;
    }

    return $p;
}

function hitung_q_besok($tahun){
    $a = ($tahun-1)%4;
    $q = (($tahun-1) - $a) / 4;

    return $q;
}

function hitung_pancawara_besok($tanggal, $bulan, $tahun){
    $x = hitung_p_besok($tanggal, $bulan, $tahun) + hitung_q_besok($tahun);
    $xx = fmod($x, 5);
    if($xx == 0){
        $pancawara = "Umanis";
        $n_pancawara = 5;
    }elseif($xx == 1){
        $pancawara = "Paing";
        $n_pancawara = 9;
    }elseif($xx == 2){
        $pancawara = "Pon";
        $n_pancawara = 7;
    }elseif($xx == 3){
        $pancawara = "Wage";
        $n_pancawara = 4;
    }elseif($xx == 4){
        $pancawara = "Kliwon";
        $n_pancawara = 8;
    }
    return $pancawara;
}

function nilai_pancawara_besok($tanggal, $bulan, $tahun){
    $x = hitung_p_besok($tanggal, $bulan, $tahun) + hitung_q_besok($tahun);
    $xx = fmod($x, 5);
    if($xx == 0){
        $n_pancawara = 5;
    }elseif($xx == 1){
        $n_pancawara = 9;
    }elseif($xx == 2){
        $n_pancawara = 7;
    }elseif($xx == 3){
        $n_pancawara = 4;
    }elseif($xx == 4){
        $n_pancawara = 8;
    }
    return $n_pancawara;
}

function hitung_saptawara_besok($tanggal, $bulan, $tahun){
    $y = hitung_p_besok($tanggal, $bulan, $tahun) + hitung_q_besok($tahun) + $tahun;
    $yy = fmod($y, 7);
    if($yy == 0){
        $saptawara = "Jumat";
        $n_saptawara = 6;
    }elseif($yy == 1){
        $saptawara = "Sabtu";
        $n_saptawara = 9;
    }elseif($yy == 2){
        $saptawara = "Minggu";
        $n_saptawara = 5;
    }elseif($yy == 3){
        $saptawara = "Senin";
        $n_saptawara = 4;
    }elseif($yy == 4){
        $saptawara = "Selasa";
        $n_saptawara = 3;
    }elseif($yy == 5){
        $saptawara = "Rabu";
        $n_saptawara = 7;
    }elseif($yy == 6){
        $saptawara = "Kamis";
        $n_saptawara = 8;
    }

    return $saptawara;
}

function nilai_saptawara_besok($tanggal, $bulan, $tahun){
    $y = hitung_p_besok($tanggal, $bulan, $tahun) + hitung_q_besok($tahun) + $tahun;
    $yy = fmod($y, 7);
    if($yy == 0){
        $n_saptawara = 6;
    }elseif($yy == 1){
        $n_saptawara = 9;
    }elseif($yy == 2){
        $n_saptawara = 5;
    }elseif($yy == 3){
        $n_saptawara = 4;
    }elseif($yy == 4){
        $n_saptawara = 3;
    }elseif($yy == 5){
        $n_saptawara = 7;
    }elseif($yy == 6){
        $n_saptawara = 8;
    }

    return $n_saptawara;
}

function hitung_urip_besok($tanggal, $bulan, $tahun){
    // MENHITUNG URIP HARI INI
    $urip = nilai_saptawara_besok($tanggal, $bulan, $tahun) + nilai_pancawara_besok($tanggal, $bulan, $tahun);

    return $urip;
}

function total_urip_besok($tanggal_saya, $bulan_saya, $tahun_saya, $tanggal_H, $bulan_H, $tahun_H){
        $t_urip = hitung_urip_besok($tanggal_saya, $bulan_saya, $tahun_saya) + hitung_urip_besok($tanggal_H, $bulan_H, $tahun_H);
        $s_hari = fmod($t_urip, 4);

        return $s_hari;
}


?>