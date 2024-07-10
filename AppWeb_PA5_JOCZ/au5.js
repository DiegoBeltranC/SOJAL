$(document).ready(function() {
    $('#formulario').submit(function(event) {
      event.preventDefault(); // Prevent default form submission
  
      let missingFields = []; // Array to store missing fields
  
      // Check if required fields are empty
      if ($('#txtNombre').val() === '') {
        missingFields.push('Nombre');
      }
  
      if ($('#txtApellido').val() === '') {
        missingFields.push('Apellido Paterno');
      }
  
      if ($('#txtApellidoM').val() === '') {
        missingFields.push('Apellido Materno');
      }
  
      if ($('#txtCurp').val() === '') {
        missingFields.push('CURP');
      }
  
      if ($('#txtActa').val() === '') {
        missingFields.push('Acta de Nacimiento');
      }
  
      if ($('#txtRFC').val() === '') {
        missingFields.push('RFC');
      }
  
      // If there are missing fields, display an alert
      if (missingFields.length > 0) {
        alert('Campos faltantes: ' + missingFields.join(', '));
        return false; // Prevent form submission
      }
  
      // If all fields are filled, submit the form
      alert('Formulario enviado correctamente!');
      this.submit(); // Submit the form
    });
  });
  