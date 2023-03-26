<aside class="left-sidebar">
    <!-- SIdebar Scroll -->
    <div class="scroll-sidebar">
        
        <!-- sidebar navigation -->
        <nav class="sidebar-nav">
        <?php 
        if(isset($_SESSION['status'])){
        ?>
        <ul id="sidebarnav">
            <li>
                <a href="dashboard.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li>
                <a href="kriteria.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Bobot Kriteria</span></a>
            </li>
            <li>
                <a href="listlaptop.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Daftar Laptop</span></a>
            </li>
            <li>
                <a href="perhitungan.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Hasil Nilai Topsis</span></a>
            </li>
            <!-- <li>
                <a href="inputlaptop.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Input Laptop</span></a>
            </li> -->
            <li>
                <a href="logout.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Logout</span></a>
            </li>
            <button class="btn btn-lg" id="digital-clock" style="width: 100%;"></button>
        </ul>
        <script src = "js/jam.js"> </script>
        <?php
        }else{
            ?>
            <ul id="sidebarnav">
                <li><a href="index.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Halaman Utama</span></a>
                </li>
                <li><a href="ranking.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Rekomendasi Laptop</span></a>
                </li>
                <li><a href="topsisumum.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Cari Laptop</span></a>
                </li>
                <li><a href="detailtoko.php" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu">Tentang Toko</span></a>
                </li>
                <li><a aria-expanded="false"><i class="mdi mdi-gaude"></i><span class="hide-menu"></span></a>
                </li>
                <button class="btn btn-lg" id="digital-clock" style="width: 100%;"></button>
            </ul>
            <script src = "js/jam.js"> </script>
            
        <?php 
        }
        ?>
        
        
        </nav>
    </div>
</aside>