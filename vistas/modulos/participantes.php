<!-- CONTENT-HEADER -->
<section class="content-header">

	<div class="container-fluid">

		<div class="row mb-2">

			<div class="col-sm-6">
				<h1>Administrar Participantes</h1>
			</div>

			<div class="col-sm-6">
				
				<ol class="breadcrumb float-sm-right">

					<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                	<li class="breadcrumb-item active">Gestor Participantes</li>						
				</ol>

			</div>
		</div>	
	</div>	

</section>
<!-- /. CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">
    
    <div class="container-fluid">   

        <div class="btn-agregar-participante btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-participante" data-dismiss="modal"> <i class="fas fa-plus-square"></i> Agregar Participante</button>
        </div>

        <table id="tablaParticipantes" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="bg-info">
                <tr>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td style="width:5%;">Genero</td>
                    <td style="width:7%;">Fecha de nacimiento</td>
                    <td style="width:5%;">Edad</td>
                    <td style="width:5%;">Village</td>
                    <td style="width:6%;">Localidad</td>
                    <td style="width:5%;">Pais</td>
                    <td style="width:5%;">Programa</td>
                    <td style="width:10%;">Estado</td>
                    <td style="width:5%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>    

    </div>  

</section>
<!-- ./ CONTENT -->

<!-- VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->
<div class="modal fade" id="modal-gestionar-participante">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
            =MODAL HEADER
            ===============================================================-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Participante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- ============================================================
            =MODAL BODY
            ===============================================================-->
            <div class="modal-body">
               <div class="row">
                   <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id ="idParticipante" name ="participante" value ="">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="txtNombre" placeholder="Ingrese nombre">
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtApellido">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="txtApellido" placeholder="Ingrese el apellido">
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtGenero">Genero</label>
                            <select name="genero" id="txtGenero" class="form-control select2bs4">
                                <option >M</option>
                                <option >F</option>
                            </select>
                        </div>
                   </div>

                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtFechaNacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fechaNacimiento" id="txtFechaNacimiento" >
                        </div>
                   </div>

                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtEdad">Edad</label>
                            <input type="number" class="form-control" name="edad" id="txtEdad" placeholder="Ingrese la edad">
                        </div>
                   </div>

                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtVillage">Village</label>
                            <select name="village" id="txtVillage" class="form-control select2bs4">
                            <option value="1">Centro</option>
                                <option value="2">Sur</option>
                                <option value="3">Norte</option>
                            </select>
                        </div>
                   </div>

                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtLocalidad">Localidad</label>
                            <select name="localidad" id="txtLocalidad" class="form-control select2bs4">
                            <option value="1">La magdalena</option>
                                <option value="2">La mena</option>
                                <option value="3">Solanda</option>
                                <option value="4">San bartolo</option>
                                <option value="5">Villaflora</option>

                            </select>
                        </div>
                   </div>

                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtPais">Pais patrocinador</label>
                            <select name="pais" id="txtPais" class="form-control select2bs4">
                            <option value="1">Colombia</option>   
                            <option value="2">Ecuador</option>
                                <option value="3">Estados Unidos</option>
                                <option value="4">España</option>
                                <option value="5">Mexico</option>
                            </select>
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtPrograma">Programa</label>
                            <select name="programa" id="txtPrograma" class="form-control select2bs4">
                            <option value="1">Programa 1</option>
                                <option value="2">Programa 2</option>
                                <option value="3">Programa 3</option>
                            </select>
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="1">Comunitario</option>
                                <option value="2">On Hold</option>
                                <option value="3">Reinstateable</option>
                                <option value="4">Sponsored</option>
                            </select>
                        </div>
                   </div>
               </div>
            </div>
            <!-- ============================================================
            =MODAL FOOTER
            ===============================================================-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </div>

</div>
<!-- ./ VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->

<script>

	$(document).ready(function(){

        var accion = "";

        var Toast = Swal.mixin({
                                  toast: true,
                                  position: 'top-end',
                                  showConfirmButton: false,
                                  timer: 3000
                                });

  		var table = $("#tablaParticipantes").DataTable({
  			"ajax":{
				"url": "ajax/participantes.ajax.php",
				"type":"POST",
				"dataSrc":""
			},  			
            "columnDefs":[ 
                {
	            		"targets": 5,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div >Centro</div> " 
	            			}
                            if(data == 2){
								return "<div>Sur</div> " 
	            			}
                            if(data == 3){
								return "<div>Norte</div> " 
	            			}
                          
	            			
	            		}
	            	},

                    {
	            		"targets": 6,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div >La magdalena</div> " 
	            			}
                            if(data == 2){
								return "<div>La mena</div> " 
	            			}
                            if(data == 3){
								return "<div>Solanda</div> " 
	            			}
                            if(data == 4){
								return "<div>San bartolo</div> " 
	            			}
                            if(data == 5){
								return "<div>Villaflora</div> " 
	            			}
                          
	            			
	            		}
	            	}, 
                    {
	            		"targets": 7,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){
                            if(data == 1){
								return "<div> Colombia</div> " 
	            			}
	            			if(data == 2){
								return "<div > Ecuador</div> " 
	            			}
                            if(data == 3){
								return "<div> Estados Unidos</div> " 
	            			}
                            if(data == 4){
								return "<div> España</div> " 
	            			}
                            if(data == 5){
								return "<div>Mexico</div> " 
	            			}
	            			
	            		}
	            	},
                {
	            		"targets": 8,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div >Programa 1</div> " 
	            			}
                            if(data == 2){
								return "<div>Programa 2</div> " 
	            			}
                            if(data == 3){
								return "<div>Programa 3</div> " 
	            			}
                          
	            			
	            		}
	            	},
	            	{
	            		"targets": 9,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div class='bg-primary color-palette text-center'>Comunitario</div> " 
	            			}
                            if(data == 2){
								return "<div class='bg-secondary color-palette text-center'>On Hold</div> " 
	            			}
                            if(data == 3){
								return "<div class='bg-warning color-palette text-center'>Reinstateable</div> " 
	            			}
                            if(data == 4){
								return "<div class='bg-success color-palette text-center'>Sponsored</div> " 
	            			}
	            			
	            		}
	            	},
            		{
	            		"targets": 10,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){
	            			return "<center>" +
	                                    "<button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-participante'> " +
	            						  "<i class='fas fa-pencil-alt'></i> " +
	            					    "</button> " + 
	            					    "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
	            						  "<i class='fas fa-trash'> </i> " +
	            					    "</button>" +
	                                "</center>";
	                    }
            		}
            	],
            "columns":[
                    {"data": "nombre"},
                    {"data": "apellido"},
                    {"data": "genero"},
                    {"data": "fechaNacimiento"},
                    {"data": "edad"},
                    {"data": "village"},
                    {"data": "localidad"},
                    {"data": "pais"},
                    {"data": "programa"},
                    {"data": "estado"},
                    {"data": "acciones"}
                ],

            "language":{
                    "processing": "Procesando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "infoThousands": ",",
                    "loadingRecords": "Cargando...",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad",
                        "collection": "Colección",
                        "colvisRestore": "Restaurar visibilidad",
                        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                        "copySuccess": {
                            "1": "Copiada 1 fila al portapapeles",
                            "_": "Copiadas %d fila al portapapeles"
                        },
                        "copyTitle": "Copiar al portapapeles",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todas las filas",
                            "1": "Mostrar 1 fila",
                            "_": "Mostrar %d filas"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Rellene todas las celdas con <i>%d<\/i>",
                        "fillHorizontal": "Rellenar celdas horizontalmente",
                        "fillVertical": "Rellenar celdas verticalmentemente"
                    },
                    "decimal": ",",
                    "searchBuilder": {
                        "add": "Añadir condición",
                        "button": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "clearAll": "Borrar todo",
                        "condition": "Condición",
                        "conditions": {
                            "date": {
                                "after": "Despues",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vacío",
                                "equals": "Igual a",
                                "notBetween": "No entre",
                                "notEmpty": "No Vacio",
                                "not": "Diferente de"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vacio",
                                "equals": "Igual a",
                                "gt": "Mayor a",
                                "gte": "Mayor o igual a",
                                "lt": "Menor que",
                                "lte": "Menor o igual que",
                                "notBetween": "No entre",
                                "notEmpty": "No vacío",
                                "not": "Diferente de"
                            },
                            "string": {
                                "contains": "Contiene",
                                "empty": "Vacío",
                                "endsWith": "Termina en",
                                "equals": "Igual a",
                                "notEmpty": "No Vacio",
                                "startsWith": "Empieza con",
                                "not": "Diferente de"
                            },
                            "array": {
                                "not": "Diferente de",
                                "equals": "Igual",
                                "empty": "Vacío",
                                "contains": "Contiene",
                                "notEmpty": "No Vacío",
                                "without": "Sin"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Eliminar regla de filtrado",
                        "leftTitle": "Criterios anulados",
                        "logicAnd": "Y",
                        "logicOr": "O",
                        "rightTitle": "Criterios de sangría",
                        "title": {
                            "0": "Constructor de búsqueda",
                            "_": "Constructor de búsqueda (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Borrar todo",
                        "collapse": {
                            "0": "Paneles de búsqueda",
                            "_": "Paneles de búsqueda (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Sin paneles de búsqueda",
                        "loadMessage": "Cargando paneles de búsqueda",
                        "title": "Filtros Activos - %d"
                    },
                    "select": {
                        "1": "%d fila seleccionada",
                        "_": "%d filas seleccionadas",
                        "cells": {
                            "1": "1 celda seleccionada",
                            "_": "$d celdas seleccionadas"
                        },
                        "columns": {
                            "1": "1 columna seleccionada",
                            "_": "%d columnas seleccionadas"
                        }
                    },
                    "thousands": ".",
                    "datetime": {
                        "previous": "Anterior",
                        "next": "Proximo",
                        "hours": "Horas",
                        "minutes": "Minutos",
                        "seconds": "Segundos",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ]
                    },
                    "editor": {
                        "close": "Cerrar",
                        "create": {
                            "button": "Nuevo",
                            "title": "Crear Nuevo Registro",
                            "submit": "Crear"
                        },
                        "edit": {
                            "button": "Editar",
                            "title": "Editar Registro",
                            "submit": "Actualizar"
                        },
                        "remove": {
                            "button": "Eliminar",
                            "title": "Eliminar Registro",
                            "submit": "Eliminar",
                            "confirm": {
                                "_": "¿Está seguro que desea eliminar %d filas?",
                                "1": "¿Está seguro que desea eliminar 1 fila?"
                            }
                        },
                        "error": {
                            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                        },
                        "multi": {
                            "title": "Múltiples Valores",
                            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                            "restore": "Deshacer Cambios",
                            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                        }
                    },
                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
  		});

        $(".btn-agregar-participante").on('click',function(){
            accion = "registrar";
        });

        $('#tablaParticipantes tbody').on('click','.btnEliminar',function(){
            var data = table.row($(this).parents('tr')).data();
            
            var id = data["id"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('id',id);

            swal.fire({

                title: "¡CONFIRMACION!",
                text: "Seguro que desea eliminar el participante?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if(resultado.value)  {                    

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/participantes.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta){

                            console.log(respuesta);
                        
                            table.ajax.reload( null, false );                            

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            });
                        
                        }
                    })
                }
                else{
                    // alert("no se modifico el participante");
                }

            })
        })

        $('#tablaParticipantes tbody').on('click','.btnEditar',function(){
            
            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $("#idParticipante").val(data["id"])
            $("#txtNombre").val(data["nombre"]);
            $("#txtApellido").val(data["apellido"]);
            $("#txtGenero").val(data["genero"]);
            $("#txtFechaNacimiento").val(data["fechaNacimiento"]);
            $("#txtEdad").val(data["edad"]);
            $("#txtVillage").val(data["village"]);
            $("#txtLocalidad").val(data["localidad"]);
            $("#txtPais").val(data["pais"]);
            $("#txtPrograma").val(data["programa"]);
            $("#txtFecha").val(data["fecha"]);
            $("#ddlEstado").val(data["estado"]);
            

        })

        // GUARDAR LA INFORMACION DE PARTICIPANTE DESDE LA VENTANA MODAL
        $("#btnGuardar").on('click',function(){

            var id = $("#idParticipante").val(),
                nombre = $("#txtNombre").val(),
                apellido = $("#txtApellido").val(),
                genero = $("#txtGenero").val(),
                fechaNacimiento = $("#txtFechaNacimiento").val(),
                edad = $("#txtEdad").val(),
                village = $("#txtVillage").val(),
                localidad = $("#txtLocalidad").val(),
                pais = $("#txtPais").val(),
                programa = $("#txtPrograma").val(),
                estado = $("#ddlEstado").val(),
                fecha = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');
            
            var datos = new FormData();

            datos.append('id',id)
            datos.append('nombre',nombre)
            datos.append('apellido',apellido)
            datos.append('genero',genero)
            datos.append('fechaNacimiento',fechaNacimiento)
            datos.append('edad',edad)
            datos.append('village',village)
            datos.append('localidad',localidad)
            datos.append('pais',pais)
            datos.append('programa',programa)
            datos.append('estado',estado);
            datos.append('fecha',fecha);
            datos.append('accion',accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "¿Está seguro que desea realizar cambios en participante?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Continuar",
                cancelButtonText: "Cancelar"
            
            }).then(resultado => {

                if(resultado.value)  {
            
                    

                    $.ajax({
                        url: "ajax/participantes.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta){
                            console.log(respuesta);

                            $("#modal-gestionar-participante").modal('hide');
                            
                            table.ajax.reload(null,false);

                            $("#idParticipante").val("");
                            $("#txtNombre").val("");
                            $("#txtApellido").val("");
                            $("#txtGenero").val("");
                            $("#txtFechaNacimiento").val("");
                            $("#txtEdad").val("");
                            $("#txtVillage").val("");
                            $("#txtLocalidad").val("");
                            $("#txtPais").val("");
                            $("#txtPrograma").val("");
                            $("#ddlEstado").val([1]);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            })

                        }
                    });
                }
                else{
            
                }

            })

            

            
        })

    
	})

    
	
	

</script>