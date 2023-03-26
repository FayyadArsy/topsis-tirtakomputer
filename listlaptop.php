<?php
include "header.php";
include "sidebar.php";
include "connect.php";
?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Daftar Laptop</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Laptop</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <p align="left"><a href="tambahlaptop.php" class="btn btn-primary">Tambah Laptop</a></p>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Merk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql=mysqli_query($koneksi, "SELECT * FROM laptop ORDER BY id_laptop DESC");

                            $no=1;
                            while($row=mysqli_fetch_array($sql)){
                            ?>
                            <tr class='td' bgcolor='#FFF'>
                                <td><?php echo $no;?></td>
                                <td><?php echo $row['nama'];?></td>
                                <?php                 
                            print("<td><a class='btn btn-warning' href=editlaptop.php?idk=$row[id_laptop]>Ubah</a> <a class='btn btn-danger' href=javascript:KonfirmasiHapus('deletelaptop.php?idk','$row[id_laptop]')>Hapus</a> <a class='btn btn-primary' href=inputlaptop.php?idk=$row[id_laptop]>Input Nilai</a></td></tr>");$no++;
                            ?>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php 
include 'footer.php' 
?> 