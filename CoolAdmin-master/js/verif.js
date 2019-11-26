function verif() {
    c=document.getElementById('nom');



    if (c.value ==""){

        document.getElementById("err").innerHTML="tu doit";
        document.getElementById("err").classList.add("text-danger")

        c.classList.add("is-invalid");
        return false;
    }
    else {
        alert('ajouter avec  succes');
    }
}
function reset() {
    document.getElementById("err").innerHTML="Ajouter un nom de Categorie";
    document.getElementById("err").classList.remove("text-danger")

    c.classList.remove("is-invalid");

}