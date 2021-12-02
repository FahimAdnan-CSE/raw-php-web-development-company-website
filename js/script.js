// confirm window

    function myFunction() {
  confirm("Are you want to log in? Press a button!");
}







// animation and change color


function myFunction1(x) {
  if (x.checked === true) {
    document.getElementById("myDIV").style.WebkitBackfaceVisibility = "visible"; // Code for Chrome, Safari, Opera
    document.getElementById("myDIV").style.backfaceVisibility = "visible";
    document.getElementById("javascriptcolor1").style.color="white";
    document.getElementById("javascriptcolor2").style.color="white";
    document.getElementById("javascriptcolor3").style.color="white";
    document.getElementById("changeme").style.color="white";
    document.getElementById("javascriptbgcolor").style.background="#95a5a6";
    document.getElementById("myDIV").style.background="red";
  } if(x.checked===false) {
    document.getElementById("myDIV").style.WebkitBackfaceVisibility = "hidden"; // Code for Chrome, Safari, Opera
    document.getElementById("myDIV").style.backfaceVisibility = "hidden";
    document.getElementById("javascriptcolor1").style.color="#34495e";
    document.getElementById("javascriptcolor2").style.color="#34495e";
    document.getElementById("javascriptcolor3").style.color="#34495e";
    document.getElementById("javascriptbgcolor").style.background="#82ccdd";
    document.getElementById("myDIV").style.background="#ecf0f1";
    document.getElementById("changeme").style.color="#34495e";

   

  }
}