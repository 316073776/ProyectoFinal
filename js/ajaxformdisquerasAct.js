$(document).ready(function(){
	$('#formularioDisqueraActualizar').validate({
		submitHandler: function(){
		$.post("actualizar_disquera.php",
			{
                disquera_id: $('#disquera_id').val(),
				nombre: $("#nombre").val(),
				pais: $("#pais").val(),
			},
			function(data, status){
				alert(data);
				$("#formularioDisqueras").trigger("reset");
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
				maxlength: 50
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
                                maxlenght: "Pais debe tener maximo 50 caracteres"
                        }
		}
	});

});
