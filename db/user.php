<?php
// include "db/function.php";
?>
  <!-- The Modal 1-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Dobavit tip darogi</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        
        <!-- Modal body inputs-->
        <div class="modal-1">

        <div class="input_1">
        <!-- <form action="/index.php"> -->
          <div class="mini">
   <div class="krug"></div>          
  <div class="lab"> <label for="proekt">Proekt:</label></div><br>
</div>
  <select id="cars" name="cars">
    <option name="volvo" id="volvo" value="volvo">Volvo</option>
    <option name="saab" id="saab" value="saab">Saab</option>
    <option name="fiat" id="fiat" value="fiat">Fiat</option>
    <option name="audi" id="audi" value="audi">Audi</option>
  </select><br>
  <div class="mini">
  <div class="krug"></div>   
  <div class="lab"> <label for="maks_skorost">Maks./raz/skorost km/c</label></div><br>
   </div>
  <input type="number" id="maks_s" name="maks_skorost" value=""><br>
  <div class="mini">
  <div class="krug"></div>
  <div class="lab"><label for="Maks_kol_vo_polos">Makc./kol./polos</label></div><br>
   </div>
  <input type="number" id="polos" name="maks_kol_vo_polos" value=""><br> 
  <div class="mini">
  <div class="krug"></div>
  <div class="lab"><label for="kod">Kod</label></div><br>
 </div>
  <input type="text"  id="kod" name="kod" value=""><br>
  <div class="mini">
  <div class="krug"></div>
  <div class="lab"><label for="kol_vo_datchikov">kol.datchikov</label></div><br>
  </div>

  <input type="number" id="datch" name="kol_vo_datchikov" value="">
 
</div>
<div class="input_2">
<div class="mini">
 <div class="krug"></div>
 <div class="lab"><label for="tip_darogi">Tip.darogi</label></div><br>
</div>
 <input type="text" id="tip" name="tip_darogi" value="" > <br> 
 <div class="mini">
 <div class="krug"></div>
 <div class="lab"><label for="skarostnoy_porog">skorostnoy_porog.km/c</label></div><br>
</div>
<input type="text" id="porog" name="skarostnoy_porog" value=""><br>
  <div class="mini">
 <div class="krug"></div>
 <div class="lab"><label for="file">Znak</label></div><br>
</div>
  <input type="file" id="znak" value=""> 
</div>

<div class="input_3">
<div class="mini">
 <div class="krug"></div>
 <div class="lab"><label for="kol_vo_drpog">Kolich.darog<label></div><br>
</div>
  <input type="text" id="drpog" name="kol_vo_drpog" value="">
</div> 
</div>
<div class="fin_but">
<button type="button" class="but_otmena">otmena</button>  
  <button type="button" class="but_sozdat" data-toggle="modal" data-target="#myModal" id="save">sozdat</button>     
</div>        
      </div>
    </div>

  <!-- The Modal 2 -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
    
        <div class="modal-body">
          <h4>Tip darogi sozdan</h4>
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>  -->
        <button type="button" class= "btn_ok" id="ok">Ok</button>
        </div>        
      </div>
    </div>
  </div>



  </div> 

  


