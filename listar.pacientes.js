async function listarPaciente() {
    fetch("http://localhost/registroMedico/mostrarPacientes.php")
  .then((response) => {
    return response.text();
  })
  .then((html) => {
    document.getElementById("response").innerHTML = html;
     
  });
}