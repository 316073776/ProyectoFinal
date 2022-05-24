$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function(){
		$.post("alta_disqueras.php",
			{
				nombre: $("#nombre").val(),
				pais_origen: $("#pais").val(),
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
				maxlength: 50
			},
			pais: {
                                required: true,
				minlength: 2,
				maxlength: 50,
                        }
		},

		messagges: {
			nombre: {
				required: "Campo obligatorio",
				minlenght: "Nombre debe tener minimo 2 caracteres",
				maxlenght: "Nombre debe tener maximo 50 caracteres"
			},
			pais: {
                                required: "Campo obligatorio",
                                minlenght: "Pais debe tener minimo 2 caracteres",
                                maxlenght: "pais debe tener maximo 50 caracteres"
                        }
		}
	});

});
