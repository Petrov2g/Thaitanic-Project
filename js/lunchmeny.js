var d = new Date();
if(d.getHours() >= 11 && d.getHours() <= 14 ){
    $(".open").show();
    $(".closed").hide();
}
else {  
     $(".closed").show();
    $(".open").hide();
}