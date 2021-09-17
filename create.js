function myFunction(){
  document.getElementById("clz").setAttribute("class","s2");
}

function myFunction1(){
  document.getElementById("clz").setAttribute("class","s3");
}

   function getLocation1() {
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition1,showError);
    }
   else{
      x.innerHTML = "Geolocation is not supported by this browser";
       }
  }

function showPosition1(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.Longitude;
}

function showError(error) {
switch (error.code) {
  case error.PERMISSION_DENIED:
       x.innerHTML = "User denied the request for Geolacation."
       break;
  case error.POSITION_UNAVAILABLE:
       x.innerHTML = "Location information is unvailable."
       break;
  case error.TIMEOUT:
       x.innerHTML = "The request to get user location timed out."
       break;
  case error.UNKNOWN_ERROR:
       x.innerHTML = "An unknown error occurred."
       break;
 }
}

var y = document.getElementById("demo2");
function getLocation2() {
if (navigator.geolocation) {
  navigator.geolocation.watchPosition(showPosition2);
   }
else {
   y.innerHTML = "Geolocation is not supported by this browser.";
   }
 }

function showposition2(position) {
x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.Longitude;
}

function headinglocation2(){
    document.getElementById("heading1").innerHTML = '<h1 style="margin-left:auto;margin-right:auto;color:black;">' + "visitsrilanka" + "</h1>";
}

function checkcookie(){
       var user = getCookie("username");
       if(user == ""){
          user = document.getElementById("name").value;
          if(user != "" & user != null){
       setCookie("username",user,30);
          }
        }
}

function getCookie(cname){
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0;i < ca.length;i++) {
     var c = ca[i];
     while(c.charAt(0) == ' '){
       c = c.substring(1);
     }
     if(c.indexOf(name) == 0){
       return c.substring(name.length,c.length);
     }
  }
  return "";
}

function setCookie(cname,cvalue,exdays){
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*24*60*1000));
        var expires = "Expires" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

//there are more

/*function enter(){
    document.getElementById("include").innerHTML = "We are interested in what you think of us.so if you do,comment in.";
    document.getElementById("include").setAttribute("class","include1");
}*/

function remove(){
   document.getElementById("include").innerHTML = " ";
}

function textmsg(name){
  return name;
}

function loadtextone(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
      document.getElementById("loadtext").innerHTML = this.responseText
      document.getElementById("loadtext").style.display = "block";
     }
     else{
       errormsg1(this);
     }
  };

  xmlhttp.open("GET","documents/cities.txt",true);
  xmlhttp.send();
}

function loadtexttwo(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
      document.getElementById("loadtext").innerHTML = this.responseText;
      document.getElementById("loadtext").style.display = "block";
     }
     else{
       errormsg1(this);
     }
  };

  xmlhttp.open("GET","documents/mountains.txt",true);
  xmlhttp.send();
}

function loadtextthree(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
      document.getElementById("loadtext").innerHTML = this.responseText;
      document.getElementById("loadtext").style.display = "block";
     }
     else{
       errormsg1(this);
     }
  };

  xmlhttp.open("GET","documents/waterfalls.txt",true);
  xmlhttp.send();
}

function loadtextfour(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
      document.getElementById("loadtext").innerHTML = this.responseText;
      document.getElementById("loadtext").style.display = "block";
     }
     else{
       errormsg1(this);
     }
  };

  xmlhttp.open("GET","documents/places.txt",true);
  xmlhttp.send();
}

function loadtextfive(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
      document.getElementById("loadtext").innerHTML = this.responseText;
      document.getElementById("loadtext").style.display = "block";
     }
     else{
       errormsg1(this);
     }
  };

  xmlhttp.open("GET","documents/journel.txt",true);
  xmlhttp.send();
}

function loadtextsix(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
     if(this.readyState == 4 && this.status == 200){
      document.getElementById("loadtext").innerHTML = this.responseText;
      document.getElementById("loadtext").style.display = "block";
     }
     else{
       errormsg1(this);
     }
  };

  xmlhttp.open("GET","documents/nature.txt",true);
  xmlhttp.send();
}

/*async function mydisplay(){
let myPromise = new Promise((myResolve,reject) => {
    var text = textmsg("welcome to my page!!");
    setTimeout(() => myResolve(text),6000)
});
let result = await myPromise;
alert(result);
}

mydisplay();

/*function openbox(){
    
}*/

function submitform(){
  const name  = document.getElementById("name").value;
  localStorage.setItem("textarea",name);
}

window.addEventListener("load",() =>{
  document.getElementById("use").innerHTML = localStorage.getItem("textarea");
//document.getElementById("user").innerHTML = localStorage.getItem("textarea");
})
