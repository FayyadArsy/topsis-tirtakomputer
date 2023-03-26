<?php  
include "connect.php";
include "headerumum.php";

?>

<?php 
$id=$_GET['idk'];
$sqla = mysqli_query($koneksi,"SELECT * FROM laptop WHERE nama like '$id'");
$dataa= mysqli_fetch_array($sqla);

$idnya= $dataa['id_laptop'];

$sql = mysqli_query($koneksi,"SELECT * FROM datalaptop,laptop WHERE laptop.id_laptop = datalaptop.id_laptop AND datalaptop.id_laptop='$idnya'");
$data = mysqli_fetch_array($sql);
$nominal = $data['harga'] ?: 0;
$harga = number_format($nominal,2,",",".");
$gambardefault="../photo_not_available.png";
?>

<style type="text/css">
.galeri-wrap .img-big-wrap img{
    height: 450px;
    width: 458px;
    display: inline-block;
    cursor: zoom-in;

}
.gallery-wrap .img-small-wrap .item-gallery {
    width: 60px;
    height: 40px;
    border: 1px solid #ddd;
    margin: 7px 2px;
    display: inline-block;
    overflow: hidden;
}

.gallery-wrap .img-small-wrap {
    text-align: center;
}
.gallery-wrap .img-small-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 4px;
    cursor: zoom-in;
}

</style>
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container">
    <br>
    <div class="card col-lg-12">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="galery-wrap">
                    <div class="img-big-wrap" style="margin-left: 0%">
                        <div><a href="#"><img src="images/laptop/<?= $data['gambar1'] ?: $gambardefault; ?>" alt="" style="height: 100%; width: 100%; object-fit: contain "></a></div>
                       
                        
                    </div>
                </article>
            </aside>
            <aside class="col-sm-7">
            <article class="card-body p-5">
                <h3 class="title mb-3"><?php echo $data['nama']; ?></h3>
                <p class="price-detail-wrap">
                    <span class="price h3 text-warning">
                        <span class="currency">Rp. <?php echo $harga ?></span>
                    </span>
                </p>
            <dl class="item-property">
                <dt>Deskripsi</dt>
                <dd><p><?php echo $data['deskripsi']; ?></p></dd>
            </dl>
            <!-- <dl class="param param-feature">
                            <dt>Spesifikasi Laptop</dt>
                            <p>
                                    <?php $spek = mysqli_query($koneksi, "SELECT * FROM analisa left join laptop on analisa.id_laptop=laptop.id_laptop left join kriteria on kriteria.id_kriteria=analisa.id_kriteria left join t_kriteria on analisa.nilainya=t_kriteria.nkriteria and kriteria.id_kriteria=t_kriteria.id_kriteria where laptop.id_laptop='$idnya'");
                                    while ($hasilspek = mysqli_fetch_array($spek)){
                                        echo '' . $hasilspek['nama_kriteria'] . ' :' . $hasilspek['keterangan'];
                                     
                                        echo '<br>';
                                    }
                                     ?>
                                </p>
                        </dl> -->
                        
                        <dl class="param param-feature">
                            <dt>Nilai Bobot Kriteria</dt>
                            <dd>
                                <p>
                                    <?php $analisa = mysqli_query($koneksi, "SELECT * FROM analisa 
                                    left join laptop on analisa.id_laptop=laptop.id_laptop 
                                    left join datalaptop on datalaptop.id_laptop=laptop.id_laptop
                                    left join kriteria on kriteria.id_kriteria=analisa.id_kriteria where laptop.id_laptop='$idnya'");
                                    while ($bobot = mysqli_fetch_array($analisa)){
                                        echo '' . $bobot['nama_kriteria'] . ' :';
                                        if ($bobot['nilainya']==1){
                                            echo '<b>Sangat Buruk</b>';
                                        }else if ($bobot['nilainya']==2){
                                            echo '<b>Buruk</b>';
                                        }else if ($bobot['nilainya']==3){
                                            echo '<b>Cukup</b>';
                                        }else if ($bobot['nilainya']==4){
                                            echo '<b>Baik</b>';
                                        }else {
                                            echo '<b>Sangat Baik</b>';
                                        };
                                        echo '<br>';
                                    }
                                     ?>
                                </p>
                            </dd>
                        </dl>
            </article>
            </aside>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" alt="" style="width:200px;height:200px; object-fit: contain" src="images/laptop/<?php echo $data['gambar1'] ?: $gambardefault; ?>">
        </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
        <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" alt="" style="width:200px;height:200px; object-fit: contain" src="images/laptop/<?php echo $data['gambar2'] ?: $gambardefault; ?>">
        </a>
        </div>
    </div>
</div>

