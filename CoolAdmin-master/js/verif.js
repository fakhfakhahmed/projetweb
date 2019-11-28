function verif() {
    c=document.getElementById('nom');
    c1=document.getElementById('Prix');
    c2=document.getElementById('nomP');



    if (c.value ==""){

        document.getElementById("err").innerHTML="le champ catego est  obli";
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
    c2=document.getElementById('nom');
    if (c2.value ==""){

      alert('le champ nom est obligatoire');

    }

if (c1.valueOf()==""){
    alert("le champ prix est oblig");
    return false;


}
else {
    alert('ajouter avec  succes');
}

}