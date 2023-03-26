<?php 
include "header.php";
include "sidebar.php";
include "connect.php";
?>
<?php 
$id=$_GET['idk'];
$show="SELECT * FROM kriteria WHERE id_kriteria='$id'";
$hasil=mysqli_query($koneksi,$show);
$view=mysqli_fetch_row($hasil);
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Edit Kriteria</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascrip:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Edit Kriteria</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Id Kriteria</label>
                                <input type="text" readonly class="form-control" name="id_kriteria" value="<?php print($view[0]); ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Kriteria</label>
                                <input type="text" class="form-control" name="nama_kriteria" value="<?php print($view[3]); ?>">
                            </div>
                            <div class="form-group">
                                <label>Atribut</label>
                                <select class="form-control" name="atribut"><?php if ($view[1]=='benefit'){echo '<option value="benefit" selected>benefit</option><option value="cost">cost</option>';} else {echo '<option value="benefit">benefit</option><option value="cost" selected>cost</option>';}?></select>
                              </div>
                              <div class="form-group">
                                <label>Nilai</label>
                                <select name="nilai" class="form-control"><?php if ($view[2]=='1'){
                                    echo '<option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>';
                                }elseif ($view[2]=='2'){
                                    echo '<option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>';
                                }elseif ($view[2]=='3'){
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>';
                                }elseif ($view[2]=='4'){
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5">5</option>';
                                }else{
                                    echo '<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>';
                                } ?></select>
                              </div>
                              <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-success"> <a href="kriteria.php" class="btn btn-warning">Kembali</a>
                              </div>
                        </form>
                        <?php 
                        $id_kriteria=$_POST['id_kriteria'];
                        $nama_kriteria=$_POST['nama_kriteria'];
                        $atribut=$_POST['atribut'];
                        $nilai=$_POST['nilai'];
                        if(isset($nama_kriteria,$atribut,$nilai)){
                            if((!$nama_kriteria||(!$atribut))||(!$nilai)){
                                print "<script>alert ('Harap Isi semua data');</script>";
                                print"<script> self.history.back(''Gagal Menyimpan);</script>";exit();
                            }
                        $queryy="UPDATE kriteria SET atribut='$atribut',bobot_nilai='$nilai',nama_kriteria='$nama_kriteria' where id_kriteria='$id_kriteria'";
                        mysqli_query($koneksi,$queryy);
                        echo '<script type="text/javascript">
                            alert ("Data Berhasil Diubah");</script>';
                        echo '<meta http-equiv="refresh" content="1; url=kriteria.php"/>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>