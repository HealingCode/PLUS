function registrarCurso(str) {

const scohttp = new XMLHttpRequest();
scohttp.open("POST", "php\logic\registrarCurso.php?q="+str);
xhttp.send();
}
