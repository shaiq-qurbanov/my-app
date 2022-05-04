$(document).ready(function(){
let project;   
let action; 
$("#create").click(function(){
   $("#save").text("sozdat")
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
getSelect();
   
});

$("body").on("click",".update",function(){
   $("#save").text("update");
  
   action = $(this).attr('data-type') 
  
   $("#tip").val($(this).parent().parent().children().eq(1).text());
   $("#kod").val($(this).parent().parent().children().eq(2).text());
   // $("#polos").find("#polos_")
   $("#polos").val($(this).parent().parent().children().eq(4).text());
   $("#maks_s").val($(this).parent().parent().children().eq(5).text());
   $("#porog").val($(this).parent().parent().children().eq(6).text());
   $("#datch").val($(this).parent().parent().children().eq(7).text());
   $("#drpog").val($(this).parent().parent().children().eq(8).text());  
   //yuxaridakilari belede yazmaq olar->
   // $("#drpog").find("#drpog_")
   let proekt = $("#data").find("#proekt_").text();
   console.log("mm",proekt);
   // $("#cars").val(project).attr("selected",true);
   $(`select option[value=${proekt}]`).attr("selected",true);
  
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
form_data.append("project",project);



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
   form_data.append("project",project);
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
         //  console.log("bb",data);
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

// let x;
// function myFunc(x){
//    if(x<18){
//       console.log(x*x);
//    }else{
//       console.log(x+20);
//    }
// }
// myFunc(7);

// string = '123456789'
// console.log(string.length);

// let n='num';
// function func(n){
//     n='string'
//     return 5+n;
// }
// console.log(n);
// console.log(func())

// let person = {
//    name:"cavid",
//    lastname:"qurbanov",
//    age:"54"
// }
// list = "";
// for(let k in person){
// list +=person[k] + " "; 
// }
// console.log(list);
$("select").change(function(){
let str = "";
$("select option:selected").each(function() {
   str += $(this).val();
   // console.log("test",str);
});


// let form_data = new FormData();
// form_data.append("volvo", $("#volvo").val());
// form_data.append("saab", $("#saab").val());
// form_data.append("fiat", $("#fiat").val());
// form_data.append("audi", $("#audi").val());

// console.log("audi", $("#audi").val())
// console.log(form_data);

// $.ajax({
// type:'POST',
// form_data:form_data,
// url:"db/function.php",
// processData:false,
// contentType:false,
// success:function(data){
//    // console.log("kkk","volvo")
// }



// })
})

function getSelect(){
   $("#cars").change(function(){
      project = $(this).val();
   })




}

  })