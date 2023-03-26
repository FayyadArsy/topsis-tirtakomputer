<?php

function jml_kriteria(){
    global $koneksi;
    $sql = "SELECT * FROM kriteria";
    $query = mysqli_query($koneksi, $sql);
    $count = mysqli_num_rows($query);
    return $count;
}
function get_kriteria(){
    //ntah kenapa $i disini pakai = 1, harusnya mulai array dari 0
    global $koneksi;
    $kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $i=1;
    while ($datakriteria = mysqli_fetch_array($kriteria)){
        $kri[$i]=$datakriteria['nama_kriteria'];
        $i++;
    }
    return $kri;
}
function jml_alternatif(){
    global $koneksi;
    $sql = "SELECT * FROM analisa GROUP BY id_laptop";
    $query = mysqli_query($koneksi, $sql);
    $alternatif = mysqli_num_rows($query);
    return $alternatif;
}
function get_alt_name(){
    global $koneksi;
    $alternatif = mysqli_query($koneksi, "SELECT * FROM laptop");
    $i=0;
    while ($dataalternatif = mysqli_fetch_array($alternatif)){
        $alt[$i]=$dataalternatif['nama'];
        $i++;
    }
    return $alt;
}
function get_alternatif(){
    global $koneksi;
    $alternatifkriteria = array();
    $queryalternetif = mysqli_query($koneksi, "SELECT * FROM laptop order BY id_laptop");
    $i=0;
    while($dataalternatif = mysqli_fetch_array($queryalternetif)){
        $querykriteria = mysqli_query($koneksi, "SELECT * FROM kriteria ORDER BY id_kriteria");
        $j=0;
        while ($datakriteria = mysqli_fetch_array($querykriteria)){
            $queryalternatifkriteria = mysqli_query($koneksi, "SELECT * FROM analisa WHERE id_laptop = '$dataalternatif[id_laptop]' AND id_kriteria ='$datakriteria[id_kriteria]'"); $dataalternatifkriteria = mysqli_fetch_array($queryalternatifkriteria);
            $alternatifkriteria[$i][$j]=$dataalternatifkriteria['nilainya'];
            $j++;
        }
        $i++;
    }
    return $alternatifkriteria;
}
function pembagi(){
    $pembagi = array();
    for($i=0;$i<count($kriteria);$i++){
        $pembagi[$i]=0;
        for($j=0;$j<count($alternatif);$j++){
            $pembagi[$i]=$pembagi[$i]+($alternatifkriteria[$j][$i]*$alternatifkriteria[$j][$i]);
        }
        $pembagi[$i]=sqrt($pembagi[$i]);
    }
    return $pembagi;
}
function get_kepentingan(){
    global $koneksi;
    $kepentingan = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $i=0;
    while($datakepentingan=mysqli_fetch_array($kepentingan)){
        $kep[$i]=$datakepentingan['bobot_nilai'];
        $i++;
    }
    return $kep;
}
function get_costbenefit(){
    global $koneksi;
    $costbenefit = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $i=0;
    while($datacostbenefit=mysqli_fetch_array($costbenefit)){
        $cb[$i]=$datacostbenefit['atribut'];
        $i++;
    }
    return $cb;
}
function cmp($a, $b){
    if($a == $b){
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}
function print_ar(array $x){
    echo "<pre>";
    print_r($x);
    echo "</pre></br>";
}

$k = jml_kriteria();
$kri = get_kriteria();
$a = jml_alternatif();
$alt = get_alternatif();
$alt_name = get_alt_name();
$kep = get_kepentingan();
$cb = get_costbenefit();


                                ?>