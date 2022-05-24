$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function(){
		$.post("alta_compositores.php",
			{
				nombre: $("#nombre").val(),
				apellido: $("#apellido").val(),
				pais: $("#pais").val(),
				nacimiento: $("#nacimiento").val(),
			},
			function(data, status){
				alert("Status:"+status);
				$("#formulario").trigger("reset");
			});
		},

		rules: {
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 30
			},
			apellido: {
                                required: true,
                                minlength: 2,
                                maxlength: 30
                        },
			pais: {
                                required: true,
				minlength: 2,
				maxlength: 50
                        },
			nacimiento: {
                                required: true,
                        }
		},

		messagges: {
			nombre: {
				required: "Campo obligatorio",
				minlenght: "Nombre debe tener minimo 2 caracteres",
				maxlenght: "Nombre debe tener maximo 30 caracteres"
			},
			apellido: {
                                required: "Campo obligatorio",
                                minlenght: "Apellido debe tener minimo 2 caracteres",
                                maxlenght: "Apellido Paterno tener maximo 30 caracteres"
                        },
			pais: {
                                required: "Campo obligatorio",
                                minlenght: "Pais debe tener minimo 2 caracteres",
                                maxlenght: "Pais debe tener maximo 30 caracteres"
                        },
			nacimiento: {
                                required: "Campo obligatorio",
                        }
		}
	});

});
