
new DataTable('#example');

function validatePassword() {
    var password = document.getElementById('password').value;

    $.ajax({
        type: 'POST',
        url: 'index.php',
        data: { password: password },
        success: function (response) {
            if (response === 'success') {
                // Redirigeix a la pàgina de consultes si la validació és correcta
                window.location.href = 'consulta.php';
            } else {
                // Mostra un missatge d'error si la validació falla
                alert('Contrasenya incorrecta');
            }
        }
    });
}


  
  
  
