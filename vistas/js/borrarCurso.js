function borrarCurso(idCurso) {

const scohttp = new XMLHttpRequest();
scohttp.open("POST", '../php/logic/borrarCurso.php',true);
scohttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
scohttp.send("idCurso="+idCurso);
window.location.reload();
}
