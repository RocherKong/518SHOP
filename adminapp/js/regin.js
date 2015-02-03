function select_city(){
  if($('#select_pro').val()==0){
    $("#city").html("");
    $("#area").html("");
    return;
  }
  $.ajax({
   type: "POST",
   url: "index.php?r=teacher/city",
   data: "region_id="+$('#select_pro').val(),
   success: function(msg){
     $("#city").html(msg);
   }
  });
}
function select_area(){
  if($('#select_city').val()==0){
    $("#area").html("");
    return;
  }
  $.ajax({
   type: "POST",
   url: "index.php?r=teacher/area",
   data: "region_city="+$('#select_city').val(),
   success: function(msg){
     $("#area").html(msg);
   }
  });
}