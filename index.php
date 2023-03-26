<?php 
include "headerumum.php"; 
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
<!-- <h1>Welcomes</h1> -->
<div class="container-fluid">
<div class="row page-titles">
<div class="col-12">
<div class="card">
<div class="card-block">    

<div class="box">
        <img src="images/tirta/2.jpg" alt="gambartoko"  style="width:100%;">
        <div class="text">
            <h1 class="text"></h1>
        </div>
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