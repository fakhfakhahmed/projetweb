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