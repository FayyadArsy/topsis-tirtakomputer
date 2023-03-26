<?php 
include "header.php";
include "sidebar.php";
include "connect.php";
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Bobot Kriteria</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <!-- <p align="left"><a href="tambahkriteria.php" class="btn btn-primary">Tambah Data Kriteria</a></p> -->
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kriteria</th>
                                    <th>Atribut</th>
                                    <th>Bobot Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql=mysqli_query($koneksi, "SELECT * FROM kriteria ORDER BY id_kriteria DESC");

                                $no=1;
                                while($row=mysqli_fetch_array($sql)){
                                 ?>
                                <tr class="td" bgcolor='#FFF'>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['nama_kriteria']; ?></td>
                                    <td><?= $row['atribut']; ?></td>
                                    <td><?= $row['bobot_nilai']; ?></td>

                                    <?php 
                                    print("<td> <a class='btn btn-warning' href=editkriteria.php?idk=$row[id_kriteria]>Ubah</a> </td>");

                                    $no++;
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
<script type="text/javascript">$(function() {
    $("#datatable").dataTable();
});</script>

<?php
  include "footer.php";
?>
<!-- </div> -->