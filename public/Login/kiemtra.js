function validate()
{
    var u = document.getElementById("username").value;
    var E = document.getElementById("Email").value;
    var pw1 = document.getElementById("password").value;
    var pw2 = document.getElementById("password-repeat").value;
    if(u==""){
        alert("Vui long nhap ten!");
        return false;
    }
    if(E==""){
        alert("Vui long nhap Email!");
        return false;
    }
    if(pw1==""){
        alert("Vui long nhap mat khau");
        return false;
    }   else if (pw1.length < 8){
            alert("Password phai dai 8 ki tu");
            return false;
    }
    if(pw2==""){
        alert("Vui long xac minh mat khau!");
        return false;
    }   else if (pw2.length < 8){
             alert("Password xac thuc phai dai 8 ki tu");
        return false;
    }
}
