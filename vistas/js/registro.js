document.addEventListener('DOMContentLoader', function(){
const nombreUsuario = document.getElementById('nombreUsuario');
const pass = document.getElementById('pass');
const repass = document.getElementById('repass');
const alert = document.getElementById('alert');
const btn = document.getElementById('enviar');

function veriff(){
  //verificamos que no tenga cadena vacia en cada una de las opciones
  if (nombreUsuario.value===''||pass.value===''||repass.value==='') {
    alert.classList.remove('d-none')
    alert.innerText='Complete la información.';
    return;
  }
  alert.classList.add('d-none')
  }
btn.onclick = veriff();


}};
