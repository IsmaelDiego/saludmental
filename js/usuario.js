function Inciar_Sesion() {
 //recuerdame();
  let usu = document.getElementById("text_usuario").value;
  let pass = document.getElementById("text_clave").value;
  if (usu.length == 0 || pass.length == 0) {
    return Swal.fire(
      "Mensaje de Advertencia",
      "Ingrese los Campos en blanco",
      "warning"
    );
  }
  //llamamos al controlador
  $.ajax({
    url: "controller/usuario/iniciar_sesion.php",
    type: "POST",
    data: {
      u: usu,
      p: pass,
    },
  }).done(function (resp) {
    let data = JSON.parse(resp);
    if (data.length > 0) {
      $.ajax({
        url: "controller/usuario/crear_sesion.php",
        type: "POST",
        data: {
          idusuario: data[0][0], //data contiene el array de todos los datps de la bd
          usuario: data[0][1],
        },
      }).done(function (r) {
        let timerInterval;
        Swal.fire({
          title: "Bienvenido al Sistema",
          html: "Cargando <b></b> .",
          timer: 10,
          heightAuto: false,
          timerProgressBar: true,
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading();
            const b = Swal.getHtmlContainer().querySelector("b");
            timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft();
            }, 150);
          },
          willClose: () => {
            clearInterval(timerInterval);
          },
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            location.reload();
          }
        });
      });

      //Swal.fire('Mensaje de Confirmacion','Logueo exitoso','success');
    } else {
      Swal.fire("Mensaje de Error", "Usuario o Clave incorrecto", "error");
    }
  });
}
