$(document).ready(function(){
	$('#formularioGrupoActualizar').validate({
		submitHandler: function(){
		$.post("actualizar_grupo.php",
			{
                grupo_id: $('#grupo_id').val(),
				nombre: $("#nombre").val(),
				pais_origen: $("#pais_origen").val(),
			},
			function(data, status){
				alert(data);
				$("#formularioGrupos").trigger("reset");
			});
		},

		rules: {
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 50
			},
			pais_origen: {
                                required: true,
				minlength: 2,
				maxlength: 50
                        }
		},

		messagges: {
			nombre: {
				required: "Campo obligatorio",
				minlenght: "Nombre debe tener minimo 2 caracteres",
				maxlenght: "Nombre debe tener maximo 50 caracteres"
			},
			pais_origen: {
                                required: "Campo obligatorio",
                                minlenght: "Pais debe tener minimo 2 caracteres",
                                maxlenght: "Pais debe tener maximo 50 caracteres"
                        }
		}
	});

});
