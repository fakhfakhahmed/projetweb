function signup()
{ var c1=f.pass.value;
  var c2=f.confirmpass.value;
  var tel=f.phone.value;

  if(isNaN(tel)){

 document.getElementById('tel').innerHTML="tel comporte que des chiffres";
  return false ;
}
else
 {

     document.getElementById('tel').innerHTML="";
    
 }

   if(c2!=c1){

  document.getElementById('mdp').innerHTML="verifier le password";
   return false ;
 }
else
  {

      document.getElementById('mdp').innerHTML="";
      return true;
  }
}
