function alert(){
    swal({
        title: "Registro exitoso",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
      });
}

function mostrarAlertaAntesDeEnviar() {
    // Muestra la alerta
    swal({
        title: "Registro exitoso",
        text: "You clicked the button!",
        icon: "success",
        buttons: {
            ok: "OK",
        },
    }).then(function (value) {
        // Verifica si el valor es true (indicando que el usuario hizo clic en "OK")
        if (value) {
            // Envía el formulario
            document.querySelector('form').submit();
        }
    });

    // Retorna false para evitar que el formulario se envíe automáticamente
    return false;
}