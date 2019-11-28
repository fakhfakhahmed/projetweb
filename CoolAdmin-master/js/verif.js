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
    if (c1.value ==""){


      document.getElementById('er').innerHTML="le champ prix est obligatoire";
      document.getElementById('er').classList.add("text-danger");
        c1.classList.add("is-invalid");

        return false;

    }
   else  if(c2==""){

        document.getElementById('errr').innerHTML="le champ nom est obligatoire";
        document.getElementById('errr').classList.add("text-danger");
        c2.classList.add("is-invalid");
        return false;
    }


else {
    alert('ajouter avec  succes');
}

}