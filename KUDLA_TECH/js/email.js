
function validateEmail() {


    
    var mobile = document.getElementById('contact').value;
   
   
    var regxMobile = /^[6-9][0-9]{9}$/;
    var validMobile = mobile.match(regxMobile);

    if (!validMobile) {
        document.getElementById('errMobile').innerHTML = 'Please Enter valid Number';
        return false;
    } else {
        document.getElementById('errMobile').innerHTML = '';
    }



    var email = document.getElementById('email').value;

    var regxEmail  =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   var validEmail = email.match(regxEmail);
   if (!validEmail) {
       document.getElementById('errEmail').innerHTML = 'Please Enter a valid email';
       return false;
   } else {
       document.getElementById('errEmail').innerHTML = '';
   }


   var password = document.getElementById('password').value;
    
    if (password.length <4) {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password must be at least 4 characters long';
        return false; 
    } 
    else{
        document.getElementById('message').innerHTML = '';
    }
return true;

   
}
