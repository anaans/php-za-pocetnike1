$(document).ready(function(){
    
});

function provera(){
    let email=$("#email").val();
    let lozinka=$("#lozinka").val();
    let div=$("#odgovor");
    if(email=="" || lozinka==""){
        div.html("Svi podaci su obavezni!!!");
        return false;
    }
    $.post("ajax/ajax_login.php", {email: email, lozinka:lozinka}, function(response){
        //div.html(response);
        let odgovor=JSON.parse(response);
        if(odgovor.greska=="")
            document.location.assign(odgovor.stranica);
        else
            div.html(odgovor.greska);
    })
}