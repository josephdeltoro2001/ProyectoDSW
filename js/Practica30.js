//Del Toro Cruz Joseph Vladimir
//Función para validar que lo que se ingrese sean solo letras
function validarLetras(input) {
  let regex = /[^a-zA-Z ]/g;
  if (regex.test(input.value)) {
    alert("Por favor, ingrese solo letras.");
    input.value = input.value.replace(regex, '');
  }
}

//Función para validar que lo que se ingrese sean solo números
function validarNumeros(input) {
  let caracteres = /[^0-9]/g;
  if (caracteres.test(input.value)) {
    alert("Por favor, ingrese solo números.");
    input.value = input.value.replace(caracteres, '');
  }
}

//Función para hacer que aparezca o desaparezca la opción de talla
function desaparecer_talla(){
  let select = document.getElementById("camisa");
  let tr = document.querySelectorAll("tr:nth-child(6)");
  let form = document.getElementById("formulario");
  // let fila_talla = document.getElementById('talla');

  if (select.selectedIndex == 0) {
    tr[0].classList.remove("talla");
    tr[1].classList.remove("talla");
    form.style.height = "500px";
  }else{
    tr[0].classList.add("talla");
    tr[1].classList.add("talla");
    form.style.height = "450px";
  }
}
