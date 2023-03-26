<?php 
include "header.php";
include "connect.php";
?>

<?php
    $id=$_GET['idk'];
    $show_idl="SELECT * FROM datalaptop WHERE id_laptop='$id'";
    $hasil_l=mysqli_query($koneksi,$show_idl);
    // $view_kelas=mysqli_fetch_row($hasil_l);
    ?>
<script src="js/jquery.js"></script>
<script src="js/validator.min.js"></script>

<script>
    $(document).ready(function(){
        $('form').parsley();
    });
</script>
<div class="container">
    <h1 class="mt-5">Input Laptop</h1>
    <div class="row">
        <div class="col-lg-8">
        <?php 
        if(mysqli_num_rows($hasil_l) > 0){
        ?>
        <div class="table-responsive">
            <br>
            <p align="center">
                <img src="images/short3.png"><br><br>
                <h2>Data Sudah Diisi</h2>
            </p>
        </div>
        <?php 
        } else {
            $cek="SELECT * FROM laptop WHERE id_laptop='$id'";
            $a=mysqli_query($koneksi, $cek);
            $b=mysqli_fetch_array($a);
            $idlaptop=$b['id_laptop'];
            //cari perbedaan fetch row dan fetch array
         ?>


           <div class="table-responsive">
            <form action="" class="form-horizontal" data-toggle="validator" role="form" method="post" enctype="multipart/form-data">
                <table class="table" align="left">
                <tr>
              <td>ID Laptop</td>
              <td><input readonly type="text" class="form-control" name="idlaptop" value="<?php echo $idlaptop; ?>"></td>
            </tr>

                    <?php 
                    $q= mysqli_query($koneksi, "SELECT * FROM kriteria ORDER BY id_kriteria");
                    while($r = mysqli_fetch_array($q)){
                        ?>
                    <tr>
                        <td width="200">
                            <?php echo $r['nama_kriteria']; ?>(<?php echo $r['atribut']; ?>)
                        </td>
                        <td width="200">
                            <div class="form-group">
                                <?php 
                               $i="a"; $querykriteria = mysqli_query($koneksi, "SELECT * FROM kriteria, t_kriteria where kriteria.id_kriteria = t_kriteria.id_kriteria and t_kriteria.id_kriteria = '$r[id_kriteria]'");
                                while ($datakriteria = mysqli_fetch_array($querykriteria)){

                                    ?>
                                <div class="radio">
                                    
<input type="radio" id="idlabel<?php echo $i; ?><?php echo $datakriteria['id_kriteria']; ?>" required name="kepentingan<?php echo $datakriteria['id_kriteria']; ?>" value="<?php echo $datakriteria['nkriteria']; ?>">
<label for="idlabel<?php echo $i; ?><?php echo $datakriteria['id_kriteria']; ?>"><?php echo $datakriteria['keterangan']; ?></label>
                                </div>
                                <?php 
                                $i++;
                                }
                                 ?>
                                 <div class="help-block with-errors"></div>
                            </div>
                        </td>
                    </tr>
                    <?php  } ?>    
                    <tr>
                        <td>Deskripsi Laptop</td>
                        <td><textarea name="deskripsi" cols="50" rows="5" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>Harga Laptop</td>
                        <td><input type="text" class="form-control" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Gambar1</td>
                        <td><input type="file" name="fupload1"></td>
                    </tr>
                    <tr>
                        <td>Gambar2</td>
                        <td><input type="file" name="fupload2"></td>
                    </tr>
                    <tr>
                     <td colspan="2"><input id="btn-fblogin" class="btn btn-primary" type="submit" value="Input Data Laptop" /></td>
                    </tr>
                </table>
            </form>
           </div>
           <?php 
        
           $deskripsi=$_POST['deskripsi'];
           $harga=$_POST['harga'];
           $lokasi_file1 = $_FILES['fupload1']['tmp_name'];
           $nama_file1 = $_FILES['fupload1']['name'];
           $harga=$_POST['harga'];
           $lokasi_file2 = $_FILES['fupload2']['tmp_name'];
           $nama_file2 = $_FILES['fupload2']['name'];
            
           if(isset($deskripsi,$harga)){
            move_uploaded_file($lokasi_file1, "images/laptop/$nama_file1"); 
            move_uploaded_file($lokasi_file2, "images/laptop/$nama_file2");

            for($i=1;$i<=6; $i++){
                $kepentinganku = $_POST['kepentingan'.$i];
                if((!empty($kepentinganku))){
                    $query = "INSERT INTO analisa (id_kriteria,id_laptop, nilainya) VALUES ('$i','$idlaptop','$kepentinganku')";
                    $hasil = mysqli_query($koneksi, $query);
                }
            }
            $add_kelas="INSERT INTO datalaptop(id_data, id_laptop,deskripsi,harga,gambar1,gambar2) VALUES 
            ('','$idlaptop','$deskripsi','$harga','$nama_file1','$nama_file2')";
            mysqli_query($koneksi,$add_kelas);

            echo '<script type="text/javascript"> alert ("Data Berhasil Ditambah"); </script>';
            echo '<meta http-equiv="refresh" content="1; url=listlaptop.php"/>';
           }
           ?>
           <?php } ?>
        </div>
    </div>
</div>
