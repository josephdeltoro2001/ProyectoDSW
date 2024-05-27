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
  
  //Función para hacer que aparezca o desaparezca la opción de talla
  function desaparecer_talla(){
    let select = document.getElementById("camisa");
    let tr = document.querySelectorAll("tr:nth-child(6)");
    let form = document.getElementById("formulario");
  
    //Si la opción de camisa es "NO"
    if (select.value === "NO") { 
      //Oculta la fila de la opción de talla
      tr[0].style.display = "none"; 

      // Oculta la fila de la selección de talla
      tr[1].style.display = "none"; 
      
      //Reduce la altura del formulario
      form.style.height = "400px"; 
    } else {
      //Muestra la fila de la opción de talla
      tr[0].style.display = "table-row"; 

      //Muestra la fila de la selección de talla
      tr[1].style.display = "table-row"; 

      //Restablece la altura del formulario
      form.style.height = "450px"; 
    }
  }
  