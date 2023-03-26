<?php 
include "header.php";
include "sidebar.php";
include "connect.php";
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Tambah Laptop</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Laptop</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <form action="" method="post" enctype="multipart/form-data" id="tmb-lt">
                            <div class="form-group">
                                <label>Nama Laptop</label>
                                <input type="text" id="nama_laptop" class="form-control" name="nama_laptop" class="required">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-primary"> <a  class='btn btn-warning' href="listlaptop.php">Kembali</a>
                            </div>
                        </form>
                        <?php 
                        $nama=$_POST['nama_laptop'];
                        if(isset($nama)){
                            $input_data="INSERT INTO laptop (nama) values ('$nama')";
                            mysqli_query($koneksi, $input_data);
                            echo '<script type="text/javascript"> alert ("Data Berhasil Ditambah"); </script>';
                            echo '<meta http-equiv="refresh" content="1; url=listlaptop.php"/>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  include "footer.php";
?>