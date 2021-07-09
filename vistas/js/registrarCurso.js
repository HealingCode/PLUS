function registrarCurso(idCurso,idStud) {

const scohttp = new XMLHttpRequest();
scohttp.open("POST", '../php/logic/registrarCurso.php',true);
scohttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
scohttp.send("idCurso="+idCurso+"&nombre="+idStud);
}
