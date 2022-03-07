$(document).ready(function () {
    $(".referred_1").click(function (evento) {

        var valor = $(this).val();

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
            phone_number: "Please enter a valid phone_number",
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
});
