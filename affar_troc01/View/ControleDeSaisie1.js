let DateInput = document.getElementById("date_rec");

 
function CheckDate(DateInput){
    var a=new Date();			// date courante
    var na=parseInt(DateInput.valueOf(),10);
    var nb=parseInt(a.valueOf(),10);
    if(na != nb){ alert("cest pas la date d'aujourd'hui");}else{alert("true");}
   }
   
   document.forms["addReclam"].addEventListener("submit", function CheckDate(DateInput){
    var a=new Date();			// date courante
    var na=parseInt(DateInput.valueOf(),10);
    var nb=parseInt(a.valueOf(),10);
    if(na != nb){ alert("cest pas la date d'aujourd'hui");}else{alert("true");}
   }
   );