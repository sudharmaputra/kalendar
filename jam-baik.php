<?php


function jam_baik($tanggal, $bulan, $tahun){
    $sap = hitung_saptawara($tanggal, $bulan, $tahun);
    if($sap == "Minggu"){
        return "Siang 07.45 - 10.18 | Malam 19.45 - 22.18 <br>
                Siang 12.42 - 15.06 | Malam 24.42 - 03.06";
    }
    if($sap == "Senin"){
        return "Siang 07.45 - 10.18 | Malam 19.45 - 22.18 <br>
                Siang 12.42 - 15.06 | Malam 24.42 - 03.06";
    }
    if($sap == "Selasa"){
        return "Siang 10.18 - 17.30 | Malam 22.18 - 05.30";
    }
    if($sap == "Rabu"){
        return "Siang 05.30 - 10.18 | Malam 17.30 - 19.45 <br>
                Siang 12.42 - 17.30 | Malam 24.42 - 05.30";
    }
    if($sap == "Kamis"){
        return "Siang 12.42 - 17.30 | Malam 24.42 - 05.30";
    }
    if($sap == "Jumat"){
        return "Siang 05.30 - 07.45 | Malam 17.30 - 19.45 <br>
                Siang 10.18 - 12.42 | Malam 22.18 - 24.42 <br>
                Siang 15.06 - 17.30 | Malam 03.06 - 05.30";
    }
    if($sap == "Sabtu"){
        return "Siang 12.42 - 17.30 | Malam 24.42 - 05.30";
        
    }
}


?>