$('.form_date').datetimepicker({
    language: 'es',
    weekStart: 1,
    todayBtn: 1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});

var formulario = $("#formRegistro");

formulario.validate({
    rules: {
        txtNombre: {
            required: true,
            minlength: 5,
            maxlength: 50,
            lettersonly: true
        },
        txtApellido: {
            required: true,
            minlength: 5,
            maxlength: 50,
            lettersonly: true
        },
        txtRUT: {
            required: true,
            rut: true
        },
        txtEmail: {
            required: true,
            email: true,
            minlength: 5,
            maxlength: 255

        },
        txtContrasena: {
            required: true,
            minlength: 6,
            maxlength: 12

        },
        txtTelefono: {
            required: true,
            digits: true,
            telefono: true,
            minlength: 9,
            maxlength: 9
        },
        txtfechaNacimiento: {
            required: true
        }
    },
    messages: {
        txtNombre: {
            required: "El Nombre no debe estar vacío.",
            minlength: "El largo minimo del correo debe ser de 5 caracteres.",
            maxlength: "El largo Maximo del correo debe ser de 50 caracteres.",
            lettersonly: "Solo Letras son Permitidas."
        },
        txtApellido: {
            required: "El Apellido no debe estar vacío.",
            minlength: "El largo minimo del correo debe ser de 5 caracteres",
            maxlength: "El largo Maximo del correo debe ser de 50 caracteres",
            lettersonly: "Solo Letras son Permitidas."
        },
        txtRUT: {
            required: "El RUT no debe estar vacío.",
            rut: 'Su RUT es Incorrecto.'
        },
        txtEmail: {
            required: "El correo no debe estar vacío.",
            email: "Formato Erroneo de Email - micorreo@abc.xyz",
            minlength: "El largo minimo del correo debe ser de 5 caracteres.",
            maxlength: "El largo Maximo del correo debe ser de 255 caracteres."
        },
        txtContrasena: {
            required: "La Contraseña no debe estar vacío.",
            minlength: "El largo minimo del correo debe ser de 6 caracteres.",
            maxlength: "El largo Maximo del correo debe ser de 12 caracteres."
        },
        txtTelefono: {
            required: "El Telefono no debe estar vacío.",
            digits: "Solo numeros son Permitidos.",
            telefono: "El Telefono debe comenzar con un 9, seguido de 8 digitos. (912345678)"
        },
        txtfechaNacimiento: {
            required: "La Fecha de Nacimiento no debe estar vacío."
        }
    }
});

//RUT
function validaRut(campo) {
    if (campo.length == 0) {
        return false;
    }
    if (campo.length < 8) {
        return false;
    }

    campo = campo.replace('-', '')
    campo = campo.replace(/\./g, '')

    if (campo.length > 9) {
        return false;
    }

    var suma = 0;
    var caracteres = "1234567890kK";
    var contador = 0;
    for (var i = 0; i < campo.length; i++) {
        u = campo.substring(i, i + 1);
        if (caracteres.indexOf(u) != -1)
            contador++;
    }
    if (contador == 0) {
        return false
    }

    var rut = campo.substring(0, campo.length - 1)
    var drut = campo.substring(campo.length - 1)
    var dvr = '0';
    var mul = 2;

    for (i = rut.length - 1; i >= 0; i--) {
        suma = suma + rut.charAt(i) * mul
        if (mul == 7) mul = 2
        else mul++
    }
    res = suma % 11
    if (res == 1) dvr = 'k'
    else if (res == 0) dvr = '0'
    else {
        dvi = 11 - res
        dvr = dvi + ""
    }
    if (dvr != drut.toLowerCase()) {
        return false;
    } else {
        return true;
    }
}

// comentar si jquery.Validate no se está usando
jQuery.validator.addMethod("rut", function(value, element) {
    return this.optional(element) || validaRut(value);
}, "Revise el RUT.");

function validaTelefono(telefono) {
  if (!telefono | typeof telefono !== 'string') return false;

  var regexp = /^9\d{8}$/;
  return regexp.test(telefono);
}

jQuery.validator.addMethod("telefono", function(value, element) {
    return this.optional(element) || validaTelefono(value);
}, "Revise el Telefono.");

$.validator.addMethod( "lettersonly", function( value, element ) {
	return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "Solo letras son Permitidas." );