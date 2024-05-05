function habilitar()
{
  let ciudad = document.getElementById('Ciudad');
  if (ciudad.selectedIndex != 1)
  {
    document.getElementById("Transporte").disabled = true;
  }
  else
    {
      document.getElementById("Transporte").disabled = false;
    }
  }
  function aparecer()
  {
    let select = document.getElementById("camisas");
    let tr = document.querySelectorAll("tr:nth-child(7)");
    let form = document.getElementById("formulario");

    if (select.selectedIndex == 0) {
      tr[0].classList.remove("talla");
      tr[1].classList.remove("talla");
      form.style.height = "500px";
    }
    else{
      tr[0].classList.add("talla");
      tr[1].classList.add("talla");
      form.style.height = "450px";
    }
  }
