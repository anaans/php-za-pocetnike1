function provera(){
    let email=document.querySelector("#email");
    let lozinka=document.querySelector("#lozinka");
    let potvrda=document.querySelector("#potvrda");
    if(!potvrda.checked){
        alert("Checkbox nije čekiran");
        return false;
    }
    if(email.value=="" || lozinka.value==""){
        alert("Svi podaci su obavezni");
        return false;
    }
    if(email.value.length<7 || lozinka.value.length<7){
        alert("Svi podaci moraju imati više od 6 slova");
        return false;
    }
    document.querySelector("#odgovor").innerHTML="Svi podaci su ispravni";
}