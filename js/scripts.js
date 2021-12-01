//Inspiration
//https://twitter.com/dsenneff/status/979074488066289664

var flag = 0;

$( ".email" ).keyup(function() {
  var letterCount = $(this).val().length;
  var count = letterCount/2.5;
  var countEyes = letterCount;
  
  if(letterCount >= 1 && letterCount < 34){
    $(".pupil, .pupil2").css("transform","translate("+count+"px, 7px)");
    $(".mouth").css("height",countEyes+"px");
  }
});

 setInterval(function(){
   if($(".pass").is(":focus") == false && flag == 0){
     $(".eye").hide();
     setTimeout(function(){ 
       $(".eye").show(); 
     }, 200);}
 }, 2500);

$( ".pass" ).focus(function() {
  resetEyes();
  if(flag == 0){
    $(".eye").hide();
  }
  if(flag == 1){
    $(".eye-right").show();
  }
});

$( ".email" ).focus(function() {
  $(".eye").show();
});

$(".show").on("click", function(){
  if(flag == 1){
    $(".eye-left").show();
  }
});

function show() {
  if(flag == 0){
    flag = 1;
  }else{
    flag = 0;
    $(".eye").hide();
  }
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function validate(){
  var email = $(".email").val();
  var regex = /^\S+@\S+$/;
  var rest = regex.test(email);
  $(".eye").show();
  
  return rest;
}

$(".button").on("click", function(){
  resetEyes()
  if(!validate()){
    $(".pokemon").addClass("mad");
    $(".pokemon, .f").css("background-color","#d9aa78");
    $(".email").css("border-color","#e74c3c");
    
    setTimeout(function(){ 
    $(".pokemon").removeClass("mad");
    $(".pokemon, .f").css("background-color","#fff");
    $(".email").css("border-color","#b8e994");
     }, 300);
  }else{
    
  }
});

function resetEyes(){
  $(".pupil").css("transform","translate(13px, 7px)");
  $(".pupil2").css("transform","translate(0px, 7px)");
}