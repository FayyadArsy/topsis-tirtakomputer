<?php 
include "header.php";
include "sidebar.php";
?>
<style>
  
  .box{
        position: relative;
        display: inline-block; /* Make the width of box same as image */
    }
    .box .text{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 6%; /* Adjust this value to move the positioned div up and down */
        text-align: center;
        width: 60%; /* Set the width of the positioned div */
        color: rgba(67, 23, 115, 0.76);
    }

</style>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <?php 
                        
                        if($_SESSION['status']=='admin'){
                        ?>
                        <h1 class="mt-5"><p align="center">Halaman Utama Admin</p></h1>
                        <p class="lead" align="center">Rekomendasi Laptop Tirta Komputer</p>
                        <div class="box">
        <img src="images/tirta/2.jpg" alt="gambartoko"  style="width:100%;">
        <div class="text">
            <h1 class="text"></h1>
        </div>
    </div>
                        <!-- <p class="lead" align="center"><img src="images/muris-studio.jpg" align="center" width="150"></p> -->
                        <?php 
                        } else { ?>
                        <h1 class="mt-5">Anda Tidak Memiliki Akses Ke Halaman Ini</h1>
                        <?php 
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