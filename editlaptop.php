<?php 
include "header.php";
// include "sidebar.php";
include "connect.php";
?>

<?php 
$id=$_GET['idk'];
$show_laptop="SELECT * FROM datalaptop left join laptop on laptop.id_laptop=datalaptop.id_laptop WHERE datalaptop.id_laptop='$id'";
$hasil_laptop=mysqli_query($koneksi, $show_laptop);
$view_laptop=mysqli_fetch_row($hasil_laptop);

$fotokosong="../photo_not_available.png";
?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line mt-5">Ubah Data Laptop <?php echo $view_laptop[7] ?></h1>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="5" cols="50"><?php print($view_laptop[2]);?></textarea>
                        </div>
                        <div class="form-group">
                        <label>Harga Laptop</label>
                        <input type="number" class="form-control" name="harga" value="<?php print($view_laptop[3]);?>"/>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Gambar 1</label>
                        <input type="file" name="fupload1">
                        <p> <img src="images/laptop/<?= $view_laptop['4'] ?: $fotokosong; ?>" alt="" style=" height:150px">
                        </p>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Gambar 2</label>
                        <input type="file" name="fupload2">
                        <p> <img src="images/laptop/<?= $view_laptop['5'] ?: $fotokosong; ?>" alt="" style=" height:150px">
                        </p>
                        </div>
                        <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Simpan" />
                        <a class="btn btn-warning" href="listlaptop.php">Kembali</a>
                        </div>
                    </form>

        <?php 
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];
        if (!empty($_FILES["fupload1"]["tmp_name"])) {
            $lokasi_file1 = $_FILES['fupload1']['tmp_name'];
            $nama_file1   = $_FILES['fupload1']['name'];
            }else{
            $nama_file1 = $view_laptop['4'];
            }
        if (!empty($_FILES["fupload2"]["tmp_name"])) {
            $lokasi_file2 = $_FILES['fupload2']['tmp_name'];
            $nama_file2   = $_FILES['fupload2']['name'];
            }else{
            $nama_file2 = $view_laptop['5'];
            }

        if(isset($deskripsi,$harga)){
        if((!$deskripsi)||(!$harga)){
        print "<script>alert ('Harap semua data diisi...!!');</script>";
        print"<script> self.history.back('Gagal Menyimpan');</script>"; 
        exit();
        } 
        move_uploaded_file($lokasi_file1,"images/laptop/$nama_file1");
        move_uploaded_file($lokasi_file2,"images/laptop/$nama_file2");

        $edit_laptop="UPDATE datalaptop SET deskripsi='$deskripsi',harga='$harga',gambar1='$nama_file1',gambar2='$nama_file2'
        WHERE id_laptop='$id'";
        mysqli_query($koneksi,$edit_laptop);
        echo '<script type="text/javascript">alert ("Data Berhasil Diubah!"); </script>';echo '<meta http-equiv="refresh" content="1; url=listlaptop.php" />';} 
        ?>

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
