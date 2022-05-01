$(document).ready(function(){
let action; 
$("#create").click(function(){
  action = $(this).attr('data-type')
   // console.log($(this).attr('data-type'))
   
// let input = $('#tip');
$("input").on("input",function(){  
   let length = $(this).val().length
   length > 5 ? $(this).addClass("danger") : $(this).removeClass("danger");   
}) 

$("#polos").on("input",function(){
   let lane = Number($(this).val())
   lane > 8 ? $(this).addClass("danger") : $(this).removeClass("danger")
})

   
});

$("body").on("click",".update",function(){
   action = $(this).attr('data-type') 
  
   $("#tip").val($(this).parent().parent().children().eq(1).text());
   $("#kod").val($(this).parent().parent().children().eq(2).text());
   $("#polos").val($(this).parent().parent().children().eq(4).text());
   $("#maks_s").val($(this).parent().parent().children().eq(5).text());
   $("#porog").val($(this).parent().parent().children().eq(6).text());
   $("#datch").val($(this).parent().parent().children().eq(7).text());
   // $("#drpog").val($(this).parent().parent().children().eq(8).text());  
   //yuxaridakilari belede yazmaq olar->
   $("#drpog").find("#drpog_")

   })

 $("#save").click(function(){
   //  console.log(action);

 if (action == "create"){

 

let form_data = new FormData();
form_data.append("tip_darogi", $("#tip").val());
form_data.append("kod", $("#kod").val());
form_data.append("file", $("#znak")[0].files[0]);
form_data.append("maks_kol_vo_polos", $("#polos").val());
form_data.append("maks_skorost", $("#maks_s").val());
form_data.append("skarostnoy_porog", $("#porog").val());
form_data.append("kol_vo_datchikov", $("#datch").val());
form_data.append("kol_vo_drpog", $("#drpog").val());



let img=$("#znak")[0].files[0];
// console.log(img);
send(action,form_data,'POST');

 }else {
   let user_id = $("#up_").attr("data-id");
   let form_data = new FormData();
   form_data.append("tip_darogi", $("#tip").val());
   form_data.append("kod",$("#kod").val());
   form_data.append("maks_kol_vo_polos", $("#polos").val());
   form_data.append("maks_skorost", $("#maks_s").val());
   form_data.append("skarostnoy_porog", $("#porog").val());
   form_data.append("kol_vo_datchikov", $("#datch").val());
   form_data.append("kol_vo_drpog", $("#drpog").val());
   form_data.append("id", user_id); 
  console.log($("#tip").val(), $("#datch").val(), $("#drpog").val(),action)
send(action,form_data,'POST');
 }
 });
 //delete


 $("body").on("click",".delete", function(){
    let form_data = new FormData();
    form_data.append("id",$(this).attr("data-id"));

    $.ajax({
       type: 'POST',
       data:form_data,
       url:"db/delete.php",
       processData:false,
       contentType:false,
       done:function(done){
          console.log("bb",data);
       }
    })

 })

 //update 





function send(action,form_data,type){
       const url = action == "create" ? './db/function.php': "db/update.php";

      
   $.ajax({
         type:type,
         data:form_data,
         url:url,
         processData:false,
         contentType:false,
         success:function(data){
            // console.log("mm" ,"kol_vo_drpog");
         }

      })
}

console.log("my first git");
  })