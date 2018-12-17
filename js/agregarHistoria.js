var formulario = $("#formAgregarHistoria");

formulario.validate({
    rules: {
        txtAltura: {
            required: true,
            minlength: 2,
            maxlength: 3,
            digits: true
        },
        txtPeso: {
            required: true,
            minlength: 2,
            maxlength: 3,
            digits: true
        }
},
    messages: {
        txtAltura: {
            required: "La Altura no debe estar vacío.",
            minlength: "El largo minimo de la Altura debe ser de 2 caracteres.",
            maxlength: "El largo Maximo de la Altura debe ser de 3 caracteres.",
            digits: "Solo Numeros son Permitidas."
        },
        txtPeso: {
            required: "El Peso no debe estar vacío.",
            minlength: "El largo minimo del Peso debe ser de 2 caracteres.",
            maxlength: "El largo Maximo del Peso debe ser de 3 caracteres.",
            digits: "Solo Numeros son Permitidas."
        }
    }
});

