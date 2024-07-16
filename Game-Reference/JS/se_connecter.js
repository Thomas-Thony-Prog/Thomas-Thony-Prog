e= true;
function changer(){
    if(e){
        document.getElementById("pass").setAttribute("type", "text");
        document.getElementById("cache_montre").src="/SOURCE/IMG/eye.png";
        e=false; 
    }else{
    document.getElementById("pass").setAttribute("type", "password");
    document.getElementById("cache_montre").src="/SOURCE/IMG/eye.png";
    e=true; 
    }
}