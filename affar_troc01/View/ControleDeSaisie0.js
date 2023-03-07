
let id_user= document.getElementById("id_user");

function idValidation(){
    
    if(id_user.value.length <4){
        
            var idError = " L'identifiant doit compter plus de Chiffres.";
            document.getElementById("idError").innerHTML = idError;

            return false;
        
    }else{
    
    document.getElementById("idError").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
    }
}
let text_rec= document.getElementById("text_rec");

function textValidation(){
    if(text_rec.value.length<4 ){
            var textError = " Le texte de la reclamation doit compter au minimum 4 Caracteres.";
            document.getElementById("textError").innerHTML = textError;

            return false;
        
    }
    
    document.getElementById("textError").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}


let Reponse= document.getElementById("reponse");

function ReponseValidation(){
    if(Reponse.value.length<4 ){
            var ReponseError = " Le texte de la reclamation doit compter au minimum 4 Caracteres.";
            document.getElementById("ReponseError").innerHTML = ReponseError;

            return false;
        
    }
    
    document.getElementById("ReponseError").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}