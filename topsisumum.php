<?php
  include "headerumum.php";
  include "sidebar.php";
  ini_set("display_errors","Off");
  include("connect.php");
?>

    <div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Cari Kriteria Menggunakan Nilai BOBOT (W)</h3>
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol> -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                <?php
    function tampiltabel($arr)
    {
        echo '<table class="table table-bordered table-highlight">';
          for ($i=0;$i<count($arr);$i++)
          {
          echo '<tr>';
              for ($j=0;$j<count($arr[$i]);$j++)
              {
                echo '<td>'.$arr[$i][$j].'</td>';
                // if (empty($arr[$i][$j])) {
                //     echo "0";
                //     }else{
                //         echo '<td>'.$arr[$i][$j].'</td>';
                //     }
              }
          echo '</tr>';
          }
        echo '</table>';
    }

    function tampilbaris($arr)
    {
        echo '<table class="table table-bordered table-highlight">';
        echo '<tr>';
              for ($i=0;$i<count($arr);$i++)
              {
                echo '<td>'.$arr[$i].'</td>';
              }
        echo "</tr>";
        echo '</table>';
    }

    function tampilkolom($arr)
    {
        echo '<table class="table table-bordered table-highlight">';
      for ($i=0;$i<count($arr);$i++)
      {
            echo '<tr>';
                echo '<td >'.$arr[$i].'</td>';
            echo "</tr>";
       }
        echo '</table>';
    }

if (!isset($_POST['button']))
{
?>    

    <script src="js/jquery.js"></script>
    <script src="js/validator.min.js"></script>
        
    

<form name="form1" data-toggle="validator" role="form" method="post" action=""><br>
    <div class="row">
    <div class="col-sm-12">
  <table class="table table-sm">
  <thead>
  <tr>
  <th id="ignore" bgcolor="#DBEAF5" width="400" colspan="2"><div align="center"><strong><font size="2" face="Arial, Helvetica, sans-serif"><font size="2">BOBOT KEPENTINGAN KRITERIA</font> </font></strong></div></th></tr></thead>
  <tbody>
  <?php
            $q = mysqli_query($koneksi, "select * from kriteria ORDER BY id_kriteria");
            while ($r = mysqli_fetch_array($q)) 
            { 
            ?>        
            <tr>
              <td width="200"> 
                <?php echo $r['nama_kriteria']; ?> (<?php echo $r['atribut']; ?>)
              </td>
                <td width="200"> 
                    <div class="form-group">
                              <?php
                                     $i="a";           $querykriteria = mysqli_query($koneksi, "SELECT * FROM kriteria,t_kriteria WHERE kriteria.id_kriteria = t_kriteria.id_kriteria AND t_kriteria.id_kriteria='$r[id_kriteria]'");
                                                while ($datakriteria = mysqli_fetch_array($querykriteria))
                                                {
                                                    
                                                  ?>

                                                  <div class="radio">
<input class="form-check-input" required type="radio" id="idradio<?php echo $i; ?><?php echo $datakriteria['id_kriteria']; ?>" name="kepentingan<?php echo $datakriteria['id_kriteria']; ?>" value="<?php echo $datakriteria['nkriteria']; ?>"> 
<label class="form-check-label" for="idradio<?php echo $i; ?><?php echo $datakriteria['id_kriteria']; ?>"><?php echo $datakriteria['keterangan']; ?> [<?php echo $datakriteria['nkriteria']; ?>]</label>


                                                  </div>
                                                    
                                                  <?php
                                                  $i++;
                                                }
                              ?>
                              <div class="help-block with-errors"></div>
                    </div>
                </td>
            </tr>
            <?php } ?>

    <tr>
      <td colspan="2"><input class="btn btn-success" type="submit" name="button" value="Proses"></td>
    </tr>
    </tbody>    
  </table>
  
</div>
   
    </div>
  
</form>
<?php   
} 
else 
{
        
    
   $alternatif = array(); //array("Galaxy", "iPhone", "BB", "Lumia");
    
    $queryalternatif = mysqli_query($koneksi, "SELECT * FROM laptop ORDER BY id_laptop");
    $i=0;
    while ($dataalternatif = mysqli_fetch_array($queryalternatif))
    {
        $alternatif[$i] = $dataalternatif['nama'];
        $i++;
    }
    
    $kriteria = array(); //array("Harga", "Kualitas", "Fitur", "Populer", "Purna Jual", "Keawetan");
    
    $costbenefit = array(); //array("cost", "benefit", "benefit", "benefit", "benefit", "benefit");
    
    $kepentingan = array(); //array(4, 5, 4, 3, 3, 2);

    $querykriteria = mysqli_query($koneksi, "SELECT * FROM kriteria ORDER BY id_kriteria");
    $i=0;
    while ($datakriteria = mysqli_fetch_array($querykriteria))
    {
        $kriteria[$i] = $datakriteria['nama_kriteria'];
        $costbenefit[$i] = $datakriteria['atribut'];
        $kepentingan[$i] = @$_POST['kepentingan'.$datakriteria['id_kriteria']]; //$datakriteria['kepentingan'];
        $i++;
    }
    
    $alternatifkriteria = array();
                         /* array(
                            array(3500, 70, 10, 80, 3000, 36),              
                            array(4500, 90, 10, 60, 2500, 48),                                             
                            array(4000, 80, 9, 90, 2000, 48),                                                                           
                            array(4000, 70, 8, 50, 1500, 60)
                          ); */
    
    $queryalternatif = mysqli_query($koneksi, "SELECT * FROM laptop ORDER BY id_laptop");
    $i=0;
    while ($dataalternatif = mysqli_fetch_array($queryalternatif))
    {
        $querykriteria = mysqli_query($koneksi, "SELECT * FROM kriteria ORDER BY id_kriteria");
        $j=0;
        while ($datakriteria = mysqli_fetch_array($querykriteria))
        {
            $queryalternatifkriteria = mysqli_query($koneksi, "SELECT * FROM analisa WHERE id_laptop = '$dataalternatif[id_laptop]' AND id_kriteria = '$datakriteria[id_kriteria]' AND nilainya <= '$kepentingan[$j]'");
            $dataalternatifkriteria = mysqli_fetch_array($queryalternatifkriteria);
            
            
            $alternatifkriteria[$i][$j] = $dataalternatifkriteria['nilainya'];
            $j++;
        }
        $i++;
    }
    $pembagi = array();
    
    for ($i=0;$i<count($kriteria);$i++)
    {
        $pembagi[$i] = 0;
        for ($j=0;$j<count($alternatif);$j++)
        {
            $pembagi[$i] = $pembagi[$i] + ($alternatifkriteria[$j][$i] * $alternatifkriteria[$j][$i]);
        }
        $pembagi[$i] = sqrt($pembagi[$i]);
    }
    
    $normalisasi = array();
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        for ($j=0;$j<count($kriteria);$j++)
        {
            $normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
        }
    }

    $terbobot = array();
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        for ($j=0;$j<count($kriteria);$j++)
        {
            $terbobot[$i][$j] = $normalisasi[$i][$j] * $kepentingan[$j];
        }
    }   
    
    $aplus = array();
    
    for ($i=0;$i<count($kriteria);$i++)
    {
        if ($costbenefit[$i] == 'cost')
        {
            for ($j=0;$j<count($alternatif);$j++)
            {
                if ($j == 0) 
                { 
                    $aplus[$i] = $terbobot[$j][$i];
                }
                else 
                {
                    if ($aplus[$i] > $terbobot[$j][$i])
                    {
                        $aplus[$i] = $terbobot[$j][$i];
                    }
                }
            }
        }
        else 
        {
            for ($j=0;$j<count($alternatif);$j++)
            {
                if ($j == 0) 
                { 
                    $aplus[$i] = $terbobot[$j][$i];
                }
                else 
                {
                    if ($aplus[$i] < $terbobot[$j][$i])
                    {
                        $aplus[$i] = $terbobot[$j][$i];
                    }
                }
            }
        }
    }
    
    $amin = array();
    
    for ($i=0;$i<count($kriteria);$i++)
    {
        if ($costbenefit[$i] == 'cost')
        {
            for ($j=0;$j<count($alternatif);$j++)
            {
                if ($j == 0) 
                { 
                    $amin[$i] = $terbobot[$j][$i];
                }
                else 
                {
                    if ($amin[$i] < $terbobot[$j][$i])
                    {
                        $amin[$i] = $terbobot[$j][$i];
                    }
                }
            }
        }
        else 
        {
            for ($j=0;$j<count($alternatif);$j++)
            {
                if ($j == 0) 
                { 
                    $amin[$i] = $terbobot[$j][$i];
                }
                else 
                {
                    if ($amin[$i] > $terbobot[$j][$i])
                    {
                        $amin[$i] = $terbobot[$j][$i];
                    }
                }
            }
        }
    }
    
    $dplus = array();
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        $dplus[$i] = 0;
        for ($j=0;$j<count($kriteria);$j++)
        {
            $dplus[$i] = $dplus[$i] + (($aplus[$j] - $terbobot[$i][$j]) * ($aplus[$j] - $terbobot[$i][$j]));
        }
        $dplus[$i] = sqrt($dplus[$i]);
    }
    
    $dmin = array();
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        $dmin[$i] = 0;
        for ($j=0;$j<count($kriteria);$j++)
        {
            $dmin[$i] = $dmin[$i] + (($terbobot[$i][$j] - $amin[$j]) * ($terbobot[$i][$j] - $amin[$j]));
        }
        $dmin[$i] = sqrt($dmin[$i]);
    }
    
    
    $hasil = array();
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        $hasil[$i] = $dmin[$i] / ($dmin[$i] + $dplus[$i]);
    }   
    
    $alternatifrangking = array();
    $hasilrangking = array();
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        $hasilrangking[$i] = $hasil[$i];
        $alternatifrangking[$i] = $alternatif[$i];
    }
    
    for ($i=0;$i<count($alternatif);$i++)
    {
        for ($j=$i;$j<count($alternatif);$j++)
        {
            if ($hasilrangking[$j] > $hasilrangking[$i])
            {
                $tmphasil = $hasilrangking[$i];
                $tmpalternatif = $alternatifrangking[$i];
                $hasilrangking[$i] = $hasilrangking[$j];
                $alternatifrangking[$i] = $alternatifrangking[$j];
                $hasilrangking[$j] = $tmphasil;
                $alternatifrangking[$j] = $tmpalternatif;
            }
        }
    }
?>
<div id="perhitungan" style="display:none;">
<br />
<h4 class="heading">
Alternatif :
</h4>
<?php tampilbaris($alternatif); ?>
<br />
<h4 class="heading">
Kriteria :
</h4>

<?php tampilbaris($kriteria); ?>
<br />
<h4 class="heading">
Costbenefit :
</h4>
<?php tampilbaris($costbenefit); ?>
<br />
<h4 class="heading">
Kepentingan :
</h4>
<?php tampilbaris($kepentingan); ?>
<br />
<h4 class="heading">
Alternatif Kriteria :
</h4>
<?php tampiltabel($alternatifkriteria); ?>
<br />
<h4 class="heading">
Pembagi :
</h4>
<?php tampilbaris($pembagi); ?>
<br />
<h4 class="heading">
Normalisasi :
</h4>
<?php tampiltabel($normalisasi); ?>
<br />
<h4 class="heading">
Terbobot :
</h4>
<?php tampiltabel($terbobot); ?>
<br />
<h4 class="heading">
A+ :
</h4>
<?php tampilbaris($aplus); ?>
<br />
<h4 class="heading">
A- :
</h4>
<?php tampilbaris($amin); ?>
<br />
<h4 class="heading">
D+ :
</h4>
<?php tampilkolom($dplus); ?>
<br />
<h4 class="heading">
D- :
</h4>
<?php tampilkolom($dmin); ?>
<br />
<h4 class="heading">
Hasil :
</h4>
<?php tampilkolom($hasil); ?>
<br />
<h4 class="heading">
Hasil Ranking :
</h4>
<?php tampilkolom($hasilrangking); ?>
<br />
<h4 class="heading">
Alternatif Ranking :
</h4>
<?php tampilkolom($alternatifrangking); ?>
<br />
<h4 class="heading"> Alternatif Terbaik : </h4><h4 class="heading"><span class="label label-success"> <?php echo $alternatifrangking[0]; ?> </span></h4> <h4 class="heading"> Dengan Nilai Terbesar :</h4><h4 class="heading"><span class="label label-primary"> <?php echo $hasilrangking[0]; ?></span></h4><br />
</div>
<br />
<input type="button" class="btn btn-success" value="Perhitungan" onclick="document.getElementById('perhitungan').style.display='block';"/>
<br />
<br />
<table class="table table-bordered table-highlight">
<thead>
    <tr>
        <th>Ranking</th>
        <th>Alternatif</th>
        <th>Nilai</th>
        <th>Lihat</th>
    </tr>
    </thead>
    <tbody>
<?php
    for ($i=0;$i<count($hasilrangking);$i++)
    {   
?>
    <tr>
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $alternatifrangking[$i]; ?></td>
        <td><?php echo $hasilrangking[$i]; ?></td>
        <td><a href='detaillaptop.php?idk=<?php echo $alternatifrangking[$i]; ?>' class='btn btn-md btn-outline-primary text-uppercase'>Lihat laptop</a></tr></td>
    </tr>
<?php
    }
?>
</tbody>
</table>
<br />
<?php
}
?>                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <?php 
include 'footer.php' ?>