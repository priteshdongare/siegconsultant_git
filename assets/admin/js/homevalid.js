function validation(){
    var a=document.getElementById("name").value;
    var n=document.getElementById("p").value;
    var c=document.getElementById("email").value;
    var d=document.getElementById("message").value;

    if(a==""){
        document.getElementById("rname").innerHTML="Name is required";
        return false;
    }
    if(n==""){
        document.getElementById("rp").innerHTML="Contact is required";
        return false;
    }
    if(c==""){
        document.getElementById("remail").innerHTML="Email  is required";
        return false;
    }
    if(d==""){
        document.getElementById("rmessage").innerHTML="Message is required";
        return false;
    }
}