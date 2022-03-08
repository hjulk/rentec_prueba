$(document).ready(function () {
    $(".referred_1").click(function (evento) {

        let valor = $(this).val();

        if (valor == 1) {
            document.getElementById("refered").style.display = "block";
        } else {
            document.getElementById("refered").style.display = "none";
            document.getElementById("you_referred").value = '';
        }
    });
});
$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            alert("Formulario Enviado");
        }
    });

    $('#form-contacto').validate({
        errorElement: 'span',
        messages: {
            names: "Please enter your name complete",
            company: "Please enter the name company",
            email: "Please enter a valid company email address",
            phone_number: "Please enter a valid phone number",
            solution_type: "Please select a solution type"
        },
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $('#form-contacto-es').validate({
        errorElement: 'span',
        messages: {
            names: "Por favor ingrese un nombre completo",
            company: "Por favor ingrese un nombre de compañia",
            email: "Por favor ingrese un correo electrónico valido",
            phone_number: "Por favor ingrese un numero de teléfono valido",
            solution_type: "Por favor seleccione un tipo de solución"
        },
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $('#form-contacto-fr').validate({
        errorElement: 'span',
        messages: {
            names: "Veuillez entrer votre nom complet",
            company: "Veuillez saisir le nom de l'entreprise",
            email: "Veuillez saisir une adresse e-mail d'entreprise valide",
            phone_number: "S'il vous plaît entrer un numéro de téléphone valide",
            solution_type: "Veuillez sélectionner un type de solution"
        },
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
