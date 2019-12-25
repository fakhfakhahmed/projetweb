function verif() {
    c=document.getElementById('nom');




    if (c.value ==""){

        document.getElementById("err").innerHTML="le champ catego est  obligatoire";
        document.getElementById("err").classList.add("text-danger");

        c.classList.add("is-invalid");
        return false;
    }
    else {
        alert('ajouter avec  succes');
    }


}
function test() {
    c1=document.getElementById('prix');
    c2=document.getElementById('nomp');
    c3=document.getElementById('Desc');
    c4=document.getElementById('stock');
    c5=document.getElementById('keyword');
    c6=document.getElementById('cat');

    if(c6.value=="")
    {

        document.getElementById("erreur").innerHTML="le champ categorie est obligatoire";
        document.getElementById('erreur').classList.add("text-danger");
        c6.classList.add("is-invalid");
        return false;
    }
     if(c2.value==""){

        document.getElementById('errr').innerHTML="le champ nom est obligatoire";
        document.getElementById('errr').classList.add("text-danger");
        c2.classList.add("is-invalid");
        return false;
    }
     else
     {
         c2.classList.remove("is-invalid");
         document.getElementById('errr').innerHTML="";
     }
    if (c1.value ==""){


        document.getElementById('er').innerHTML="le champ prix est obligatoire";
        document.getElementById('er').classList.add("text-danger");
        c1.classList.add("is-invalid");

        return false;

    }
    else
    {
        c1.classList.remove("is-invalid");
        document.getElementById('er').innerHTML="";
    }
    if(c3.value=="")
    {
        document.getElementById('errrr').innerHTML="le champ Description est obligatoire";
        document.getElementById('errrr').classList.add("text-danger");
        c3.classList.add("is-invalid");
        return false;
    }
    else
    {
        c3.classList.remove("is-invalid");
        document.getElementById('errrr').innerHTML="";
    }


      if(c4.value=="")
     {
         document.getElementById('errrrr').innerHTML="le champ Stock est obligatoire";
         document.getElementById('errrrr').classList.add("text-danger");
         c4.classList.add("is-invalid");
         return false;
     }
      else
      {
          c4.classList.remove("is-invalid");
          document.getElementById('errrrr').innerHTML="";
      }
      if(c5.value=="")
     {
         document.getElementById('errrrrr').innerHTML="le champ keyword est obligatoire";
         document.getElementById('errrrrr').classList.add("text-danger");
         c5.classList.add("is-invalid");
         return false;
     }




else  {
    alert('ajouter avec  succes');
}

}
function testlivreur()
{
    c1=document.getElementById('cin');
    c2=document.getElementById('nom_liv');
    c3=document.getElementById('prenom_liv');
    c4=document.getElementById('etat_liv');
    c5=document.getElementById('matricule_liv');
    c6=document.getElementById('adresse_liv');
    c7=document.getElementById('tel_liv');

    if(c1.value=="" || c1.value.length>8)
    {

        document.getElementById("er").innerHTML="le champ cin est obligatoire et doit comporte 8 caracteres chiffres et lettres";
        document.getElementById('er').classList.add("text-danger");
        c1.classList.add("is-invalid");
        return false;
    }
    else
     {
         c1.classList.remove("is-invalid");
         document.getElementById('er').innerHTML="";
     }
     if(c2.value==""){

        document.getElementById('err').innerHTML="le champ nom est obligatoire";
        document.getElementById('err').classList.add("text-danger");
        c2.classList.add("is-invalid");
        return false;
    }
     else
     {
         c2.classList.remove("is-invalid");
         document.getElementById('err').innerHTML="";
     }
    if (c3.value ==""){


        document.getElementById('errr').innerHTML="le champ prenom est obligatoire";
        document.getElementById('errr').classList.add("text-danger");
        c4.classList.add("is-invalid");

        return false;

    }
    else
    {
        c3.classList.remove("is-invalid");
        document.getElementById('errr').innerHTML="";
    }
    if(c4.value!='0' && c4.value!='1')
    {
        document.getElementById('errrr').innerHTML="le champ  etat obligatoire";
        document.getElementById('errrr').classList.add("text-danger");
        c4.classList.add("is-invalid");
        return false;
    }
    else
    {
        c4.classList.remove("is-invalid");
        document.getElementById('errrr').innerHTML="";
    }

    if(c5.value=="")
    {
        document.getElementById('errrrr').innerHTML="le champ matricule est obligatoire";
        document.getElementById('errrrr').classList.add("text-danger");
        c5.classList.add("is-invalid");
        return false;
    }
     else
     {
         c5.classList.remove("is-invalid");
         document.getElementById('errrrr').innerHTML="";
     }
      if(c6.value=="")
     {
         document.getElementById('errrrrr').innerHTML="le champ adresse est obligatoire";
         document.getElementById('errrrrr').classList.add("text-danger");
         c6.classList.add("is-invalid");
         return false;
     }
      else
      {
          c6.classList.remove("is-invalid");
          document.getElementById('errrrrr').innerHTML="";
      }
      if(c7.value=="")
     {
         document.getElementById('errrrrrr').innerHTML="le champ numero de telephone est obligatoire";
         document.getElementById('errrrrrr').classList.add("text-danger");
         c7.classList.add("is-invalid");
         return false;
     }

else  {
    alert('ajouter avec  succes');
}
}
function testlivraison()
{
    c1=document.getElementById('date_d');
    c2=document.getElementById('date_a');
    c3=document.getElementById('cmd');
    c4=document.getElementById('client');
    c5=document.getElementById('livreur');
    if(c1.value=="")
    {

        document.getElementById("er").innerHTML="le champ date est obligatoire ";
        document.getElementById('er').classList.add("text-danger");
        c1.classList.add("is-invalid");
        return false;
    }
    else
    {
         c1.classList.remove("is-invalid");
         document.getElementById('er').innerHTML="";
    }
    if(c2.value=="" || c2.value<c1.value)
    {

        document.getElementById("err").innerHTML="le champ date est obligatoire et superieur a la date de depart ";
        document.getElementById('err').classList.add("text-danger");
        c2.classList.add("is-invalid");
        return false;
    }
    else
    {
         c2.classList.remove("is-invalid");
         document.getElementById('err').innerHTML="";
    }
    if(c3.value=="")
    {

        document.getElementById("errr").innerHTML="le champ commande est obligatoire ";
        document.getElementById('errr').classList.add("text-danger");
        c3.classList.add("is-invalid");
        return false;
    }
    else
    {
         c3.classList.remove("is-invalid");
         document.getElementById('errr').innerHTML="";
    }
    if(c4.value=="")
    {

        document.getElementById("errrr").innerHTML="le champ client est obligatoire ";
        document.getElementById('errrr').classList.add("text-danger");
        c4.classList.add("is-invalid");
        return false;
    }
    else
    {
         c4.classList.remove("is-invalid");
         document.getElementById('errrr').innerHTML="";
    }
    if(c5.value=="")
    {

        document.getElementById("errrrr").innerHTML="le champ livreur est obligatoire ";
        document.getElementById('errrrr').classList.add("text-danger");
        c5.classList.add("is-invalid");
        return false;
    }
    else
    {
         c5.classList.remove("is-invalid");
         document.getElementById('errrrr').innerHTML="";
    }
} 