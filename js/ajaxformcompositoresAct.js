$(document).ready(function(){
	$('#formularioCompositorActualizar').validate({
		submitHandler: function(){
		$.post("actualizar_compositor.php",
			{
                compositor_id: $('#compositor_id').val(),
				nombre: $("#nombre").val(),
				apellido: $("#apellido").val(),
				pais_nacimiento: $("#pais_nacimiento").val(),
				fecha_nacimiento: $("#fecha_nacimiento").val(),
			},
			function(data, status){
				alert(data);
				$("#formularioCompositores").trigger("reset");
			});
		},

		rules: {
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 50
			},
			apellido: {
                                required: true,
				minlength: 2,
				maxlength: 50
                        },
			pais_nacimiento: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			fecha_nacimiento: {
				required: true,
			}
		},

		messagges: {
			nombre: {
				required: "Campo obligatorio",
				minlenght: "Nombre debe tener minimo 2 caracteres",
				maxlenght: "Nombre debe tener maximo 50 caracteres"
			},
			apellido: {
                                required: "Campo obligatorio",
                                minlenght: "Pais debe tener minimo 2 caracteres",
                                maxlenght: "Pais debe tener maximo 50 caracteres"
                        },
			pais_nacimiento: {
                                required: "Campo obligatorio",
                                minlenght: "Pais debe tener minimo 2 caracteres",
                                maxlenght: "Pais debe tener maximo 50 caracteres"
                        },
			fecha_nacimiento: {
				required: "Campo obligatorio"
			}
		}
	});

});
