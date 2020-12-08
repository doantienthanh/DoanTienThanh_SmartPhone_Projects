function checkRegister(){
    var name =document.getElementById('userName');
    var password=document.getElementById('password');
    var email=document.getElementById('email');
    var phone=document.getElementById('phoneNumber');
    var address=document.getElementById('address');
    if(name===''|| password===''||email===''||phone===''||address===''){
        document.getElementById('showError').innerHTML="You must enter all fields !";
    }else{
        localStorage.setItem('error_register','You must enter all field !');
        // document.getElementById('showError').innerHTML="You must enter all field !";
    }
}