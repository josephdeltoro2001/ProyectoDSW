//Del Toro Cruz Joseph Vladimir
//Jiménez García Juan Emanuel

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