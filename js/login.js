var formulario = $("#formLogin");

formulario.validate({
    rules: {
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
        }
    },
    messages: {
        txtEmail: {
            required: "El correo no debe estar vacío.",
            email: "Formato Erroneo de Email - micorreo@abc.xyz",
            minlength: "El largo minimo del correo debe ser de 5 caracteres.",
            maxlength: "El largo Maximo del correo debe ser de 255 caracteres."
        },
        txtContrasena: {
            required: "El correo no debe estar vacío.",
            minlength: "El largo minimo del correo debe ser de 6 caracteres",
            maxlength: "El largo maximo del correo debe ser de 12 caracteres"
        }
    }
});
