$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function(){
		$.post("alta_usuarios.php",
			{
				nombre: $("#nombre").val(),
				apaterno: $("#apaterno").val(),
				amaterno: $("#amaterno").val(),
				contrasena: $("#contrasena").val(),
			},
			function(data, status){
				alert("Status: "+ status + "Data: " + data);
				$("#formulario").trigger("reset");
			});
		},

		rules: {
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 50
			},
			apaterno: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			amaterno: {
                                required: true,
				minlength: 2,
				maxlength: 50
                        },
			contrasena: {
                                required: true,
				minlength: 8,
				maxlength: 15
                        },
		},

		messagges: {
			nombre: {
				required: "Campo obligatorio",
				minlength: "Nombre debe tener minimo 2 caracteres",
				maxlength: "Nombre debe tener maximo 50 caracteres"
			},
			apaterno: {
                                required: "Campo obligatorio",
                                minlength: "Apellido paterno debe tener minimo 2 caracteres",
                                maxlength: "Apellido Paterno tener maximo 50 caracteres"
                        },
			amaterno: {
                                required: "Campo obligatorio",
                                minlength: "Apellido materno debe tener minimo 2 caracteres",
                                maxlength: "Apellido materno debe tener maximo 50 caracteres"
                        },
			contrasena: {
                                required: "Campo obligatorio",
				minlength: "Contraseña debe de ser de minimo 8 caracteres",
				maxlength: "Contraseña debe de ser de maximo 15 caracteres"
                      	}
		}
	});

});
