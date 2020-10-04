<html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Wind Turbine Status</title>
 </head>
 <body>
<div style = "margin-left:30px; margin-top:20px;">
 <h3 >Wind Turbine Status</h3>
 <h5>Inspection results for our wind turbine. </h5>
 </div>
 <br>
 <div class="container-fluid" >
  <div class="row">
    <div class="col-3">
 <?php

for ($i = 1; $i < 101; $i++) {
    if ($i %25===1 and $i != 1){
        echo'</div >';
        echo'<br>';
        echo'<div class="col-3">';
    }
    if ($i % 3 == 0 and $i % 5 == 0){
        echo '<div class="alert alert-danger" role="alert">';
        echo "<span>$i : Coating Damage and Lighting Strike</span>";
        echo '</div>';
    }
    
    elseif ($i % 3 === 0){
        echo '<div class="alert alert-info" role="alert">';
        echo "<span>$i : Coating Damage</span>";
        echo '</div>';
    }
    elseif ($i % 5 === 0){
        echo '<div class="alert alert-warning" role="alert">';
        echo "<span>$i : Lightning Strike</span>";
        echo '</div>';
    }
    else{
        echo'<div class="alert alert-light" role="alert">';
        echo "<span>$i : Running Normally</span>";
        echo '</div>';
    }
}

 ?> 
 </div>
 </div>

 </body>
</html>