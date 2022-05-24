$(document).ready(function(){
	$('#formulario').validate({
		submitHandler: function(){
		$.post("alta_discos.php",
			{
				titulo: $("#titulo").val(),
				grupo: $("#grupo").val(),
				anio: $("#anio").val(),
				genero: $("#genero").val(),
				disquera: $("#disquera").val(),
				productor: $("#productor").val(),
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
			grupo: {
                                required: true,
                                minlength: 2,
                                maxlength: 30
                        },
			anio: {
                                required: true,
                        },
			genero: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			disquera: {
                                required: true,
                                minlength: 2,
                                maxlength: 50
                        },
			productor: {
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
			grupo: {
                                required: "Campo obligatorio",
                                minlenght: "Grupo debe tener minimo 2 caracteres",
                                maxlenght: "Grupo Paterno tener maximo 30 caracteres"
                        },
			anio: {
                                required: "Campo obligatorio",
                        },
			genero: {
                                required: "Campo obligatorio",
                                minlenght: "Genero debe tener minimo 2 caracteres",
                                maxlenght: "Genero debe tener maximo 30 caracteres"
                        },
			disquera: {
                                required: "Campo obligatorio",
                                minlenght: "Disquera debe tener minimo 2 caracteres",
                                maxlenght: "Disquera debe tener maximo 30 caracteres"
                        },
			productor: {
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
