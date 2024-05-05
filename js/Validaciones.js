//Validaciones para el Login
function sololetras() {
    //Se obtiene el campo de entrada y el elemento del mensaje de error por su id
    var letras = document.getElementById('cajaLetras');
    var mensajeError = document.getElementById('mensajeError1');

   //Agregar el evento oninput al campo de entrada
   letras.oninput = function() {
   //Obtener el valor actual del campo de entrada
   var valor = letras.value;

   //Verificar si el valor contiene solo letras (tanto en mayúsculas y minúsculas)
   var soloLetras = /^[A-Za-z\s]+$/.test(valor);
   
   if (!soloLetras) {
    //Mostrar el mensaje de error
    mensajeError.style.display = 'block';
    } else {
    //Ocultar el mensaje de error
    mensajeError.style.display = 'none';
   }
 };
}

function solonumeros(){
  //Se obtiene el campo de entrada y el elemento del mensaje de error por su id
  var numeros = document.getElementById('cajaNumeros');
  var mensajeError = document.getElementById('mensajeError2');

  //Agregar el evento oninput al campo de entrada
  numeros.oninput = function() {
  //Obtener el valor actual del campo de entrada
  var valor = numeros.value;

  //Verificar si el valor contiene solo números
  var soloNumeros = /^\d+$/.test(valor);

  if (!soloNumeros) {
    //Mostrar el mensaje de error
    mensajeError.style.display = 'block';
  } else {
    //Ocultar el mensaje de error
    mensajeError.style.display = 'none';
  }
};
}

//Validacioes para el registro del usuario
function sololetras1() {
  //Se obtiene el campo de entrada y el elemento del mensaje de error por su id
  var letras = document.getElementById('cajaLetras2');
  var mensajeError = document.getElementById('mensajeErrorA');

 //Agregar el evento oninput al campo de entrada
 letras.oninput = function() {
 //Obtener el valor actual del campo de entrada
 var valor = letras.value;

 //Verificar si el valor contiene solo letras (tanto en mayúsculas y minúsculas)
 var soloLetras = /^[A-Za-z\s]+$/.test(valor);
 
 if (!soloLetras) {
  //Mostrar el mensaje de error
  mensajeError.style.display = 'block';
  } else {
  //Ocultar el mensaje de error
  mensajeError.style.display = 'none';
 }
};
}

function correo() {
  //Se obtiene el campo de entrada y el elemento del mensaje de error por su id
  var letras = document.getElementById('cajaLetras3');
  var mensajeError = document.getElementById('mensajeErrorB');

 //Agregar el evento oninput al campo de entrada
 letras.oninput = function() {
 //Obtener el valor actual del campo de entrada
 var valor = letras.value;

 //Verificar si el valor contiene solo letras y contiene la estructura básica del correo
 var soloLetras = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(valor);
 
 if (!soloLetras) {
  //Mostrar el mensaje de error
  mensajeError.style.display = 'block';
  } else {
  //Ocultar el mensaje de error
  mensajeError.style.display = 'none';
 }
};
}

function solonumeros2(){
  //Se obtiene el campo de entrada y el elemento del mensaje de error por su id
  var numeros = document.getElementById('cajaNumeros2');
  var mensajeError = document.getElementById('mensajeErrorD');
  //Agregar el evento oninput al campo de entrada
  numeros.oninput = function() {
  //Obtener el valor actual del campo de entrada
  var valor = numeros.value;

  //Verificar si el valor contiene solo números
  var soloNumeros = /^\d+$/.test(valor);

  if (!soloNumeros) {
    //Mostrar el mensaje de error
    mensajeError.style.display = 'block';
  } else {
    //Ocultar el mensaje de error
    mensajeError.style.display = 'none';
  }
};
}

function sololetras3() {
  //Se obtiene el campo de entrada y el elemento del mensaje de error por su id
  var letras = document.getElementById('cajaLetras4');
  var mensajeError = document.getElementById('mensajeErrorC');

 //Agregar el evento oninput al campo de entrada
 letras.oninput = function() {
 //Obtener el valor actual del campo de entrada
 var valor = letras.value;

 //Verificar si el valor contiene solo letras (tanto en mayúsculas y minúsculas)
 var soloLetras = /^[A-Za-z\s]+$/.test(valor);
 
 if (!soloLetras) {
  //Mostrar el mensaje de error
  mensajeError.style.display = 'block';
  } else {
  //Ocultar el mensaje de error
  mensajeError.style.display = 'none';
 }
};
}

//Funciones para que se inserten solamente letras mayúsculas en los campos del formulario
function mayusculas1() {
  //Obtener el campo de entrada por su id
  var texto = document.getElementById('cajaLetras');

  //Agregar el evento oninput al campo de entrada
  texto.oninput = function() {
  //Obtener el valor actual del campo de entrada
  var valor = texto.value;

  //Convertir el valor a letras mayúsculas
  var letrasMayusculas = valor.toUpperCase();

  //Establecer el valor en letras mayúsculas en el campo de entrada
  texto.value = letrasMayusculas;
  };
}

function mayusculas2() {
  //Obtener el campo de entrada por su id
  var texto = document.getElementById('cajaLetras2');

  //Agregar el evento oninput al campo de entrada
  texto.oninput = function() {
  //Obtener el valor actual del campo de entrada
  var valor = texto.value;

  //Convertir el valor a letras mayúsculas
  var letrasMayusculas = valor.toUpperCase();

  //Establecer el valor en letras mayúsculas en el campo de entrada
  texto.value = letrasMayusculas;
  };
}

function mayusculas3() {
  //Obtener el campo de entrada por su id
  var texto = document.getElementById('cajaLetras4');

  //Agregar el evento oninput al campo de entrada
  texto.oninput = function() {
  // Obtener el valor actual del campo de entrada
  var valor = texto.value;

  //Convertir el valor a letras mayúsculas
  var letrasMayusculas = valor.toUpperCase();

  //Establecer el valor en letras mayúsculas en el campo de entrada
  texto.value = letrasMayusculas;
  };
}

function mayusculas4() {
  //Obtener el campo de entrada por su id
  var texto = document.getElementById('cajaComentarios');

  //Agregar el evento oninput al campo de entrada
  texto.oninput = function() {
  // btener el valor actual del campo de entrada
  var valor = texto.value;

  //Convertir el valor a letras mayúsculas
  var letrasMayusculas = valor.toUpperCase();

  //Establecer el valor en letras mayúsculas en el campo de entrada
  texto.value = letrasMayusculas;
  };
}

//Redireccionar a una página a tráves de las opciones del select de la página principal
function redireccionar() {
  //Obtener el elemento select por su id
  var miSelect = document.getElementById('opciones');
  
  //Obtener la opción seleccionada
  var opcionSeleccionada = miSelect.options[miSelect.selectedIndex];
  
  //Obtener el valor de la opción seleccionada
  var valorSeleccionado = opcionSeleccionada.value;
  
  //Redireccionar a la página que se haya seleccionado
  if (valorSeleccionado) {
    window.location.href = valorSeleccionado;
  }
}
