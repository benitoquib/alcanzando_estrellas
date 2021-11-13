function mostrar(dato) {
  if (dato == "1") {

    document.getElementById("email").style.display = "block";
    document.getElementById("primer_nombre").style.display = "none";
    document.getElementById("segundo_nombre").style.display = "none";
    document.getElementById("tercer_nombre").style.display = "none";
    document.getElementById("primer_apellido").style.display = "none";
  }
  if (dato == "2") {
    document.getElementById("email").style.display = "block";
    document.getElementById("primer_nombre").style.display = "block";
    document.getElementById("segundo_nombre").style.display = "block";
    document.getElementById("tercer_nombre").style.display = "block";
    document.getElementById("primer_apellido").style.display = "block";

  }
}

function showContent() {
    element = document.getElementById("content");
    check = document.getElementById("check");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}