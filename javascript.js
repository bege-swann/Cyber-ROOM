setInterval(function(){
    var d = new Date(); 
    var h = d.toLocaleTimeString();
    console.log(d.toLocaleTimeString()); 
    document.getElementById("date").innerHTML=h;
},100)