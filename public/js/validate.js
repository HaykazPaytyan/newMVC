
const FORM = document.querySelector('#login-form');
let usr = document.querySelector('#log_usr');
let pass  = document.querySelector('#log_pass');

FORM.addEventListener('submit',function(event){
   
     if (usr.value == null || usr.value == "") {
     	  event.preventDefault();
     	  document.querySelector('#log_required').innerHTML="*Required";
     	  return false;
     }

      if (pass.value == null || pass.value == "") {
     	   event.preventDefault();
     	   document.querySelector('#pass_required').innerHTML="*Required";
     	   return false;
     }

     return true;
});
