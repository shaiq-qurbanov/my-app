<?php
session_start();
include "db/user.php";
include "db/getusers.php";
?>
<!DOCTYPE html>
<html>
    <head>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    <?php
?>
    <!-- Spisok tipov doroq--->

    <div class="div_0">
    <h2 class="head">Spravochnik tipov doroq</h2>
    </div>
<div class="div_1">
        <div class="menu" id="men">
        <h3>Spisok tipov doroq</h3><br>
<button type="button" id="create" class="but_tip_dorogi" data-toggle="modal"
 data-target="#myModal" data-type="create"  >Dobavit tip darogi</button>
<table id="tabl">
  <thead>
<tr>
<th>#</th>
<th ><div>Tip dorogi</div></th>
<th ><div>Kod</div></th>
<th>Znak</th>
<th>Maks.Kol-vo<br>polos</th>
<th>Maks.<br>razreshennaya<br>skoroct</th>
<th>Neshtatuemiy<br>skorostnoy porog</th>
<th>Kol-vo<br>datchikov</th>
<th>Kol-vo<br>doroq</th>
<th>Proekt</th>
<th><div class="up_del">/</div></th>
<th><div class="up_del">x</div></th>
</tr>
</thead>
<tbody>
<?php
// $row;
if(!empty($result) && $result->num_rows>0){
  while($row=$result->fetch_assoc()){?>
  <tr id = "data">
<td id="id_"> <?php echo $row['id'];?> </td>
<td id="tip_" class="string" > <?php echo $row['tip_darogi'];?> </td>
<td id="kod_" class="string" > <?php echo $row['kod'];?> </td>
<td id="znak_">
  <img src="./uploads_/<?php echo $row['znak'];?>" alt="" class="img_">
</td>
<td id="polos_"> <?php echo $row['maks_kol_vo_polos'];?></td>
<td id="maks_s_"> <?php echo $row['maks_skorost'];?></td>
<td id="porog_"><?php echo $row['skarostnoy_porog'];?></td>
<td id="datch_"><?php echo $row['kol_vo_datchikov'];?></td>
<td id="drpog_"> <?php echo $row['kol_vo_drpog'];?></td>
<td id="proekt_"> <?php echo $row['proekt'];?></td>
 <td><div class="update_data" id= "up_" data-type="update" data-toggle="modal" data-target="#myModal" data-id="<?php
  echo $row["id"];?>">/</div></td>
<td><div class="delete"   data-id ="<?php echo $row["id"];?>">x</div></td>
</tr>
<?php
}
}
?>
</tbody>
</table>      
     </div> 
</div>  
         <script src="./js/javas.js"></script>
    </body>
</html>
