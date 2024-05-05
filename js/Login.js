var input = document.getElementsByName('Contraseña')[0];
var input = document.getElementsByName('Usuario')[0];

input.addEventListener('input', function() { 
  var value = input.value;
  var numbersOnly = /^\d+$/;

  if (!numbersOnly.test(value)) {
    input.value = value.replace(/\D/g, '');
  }
});
input.addEventListener('input', function() { 
    var value = input.value;
    var lettersOnly = /^[A-Za-z]+$/;
  
    if (!lettersOnly.test(value)) {
      input.value = value.replace(/[^A-Za-z]/g, ''); 
    }
  });