$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function(){
		$.post("alta_discos.php",
			{
				titulo: $("#titulo").val(),
				grupo: $("#grupo_id").val(),
				año: $("#año").val(),
				genero: $("#genero").val(),
				disquera: $("#disquera_id").val(),
				productor: $("#productor_id").val(),
				costo: $("#costo").val()
			},
			function(data, status){
				alert("Status:"+status);
				$("#formulario").trigger("reset");
			});
		},

		rules: {
			titulo: {
				required: true,
				minlength: 2,
				maxlength: 30
			},
			grupo_id: {
                                required: true,
                                minlength: 2,
                                maxlength: 30
                        },
			año: {
                                required: true,
                        },
			genero: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			disquera_id: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			productor_id: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			costo: {
                                required: true,
				number: true,
                                minlength: 2,
                                maxlength: 7
                        }
		},

		messagges: {
			titulo: {
				required: "Campo obligatorio",
				minlenght: "Titulo debe tener minimo 2 caracteres",
				maxlenght: "Titulo debe tener maximo 30 caracteres"
			},
			grupo_id: {
                                required: "Campo obligatorio",
                                minlenght: "Grupo debe tener minimo 2 caracteres",
                                maxlenght: "Grupo Paterno tener maximo 30 caracteres"
                        },
			año: {
                                required: "Campo obligatorio",
                        },
			genero: {
                                required: "Campo obligatorio",
                                minlenght: "Genero debe tener minimo 2 caracteres",
                                maxlenght: "Genero debe tener maximo 30 caracteres"
                        },
			disquera_id: {
                                required: "Campo obligatorio",
                                minlenght: "Disquera debe tener minimo 2 caracteres",
                                maxlenght: "Disquera debe tener maximo 30 caracteres"
                        },
			productor_id: {
                                required: "Campo obligatorio",
                                minlenght: "Productor debe tener minimo 2 caracteres",
                                maxlenght: "Productor debe tener maximo 30 caracteres"
                        },
			costo: {
                                required: "Campo obligatorio",
                                minlenght: "Costo debe tener minimo 2 caracteres",
                                maxlenght: "Costo debe tener maximo 7 caracteres"
                        }
		}
	});

});
