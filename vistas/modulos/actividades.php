<!-- CONTENT-HEADER -->
<section class="content-header">

	<div class="container-fluid">

		<div class="row mb-2">

			<div class="col-sm-6">
				<h1>Administrar Actividades</h1>
			</div>

			<div class="col-sm-6">
				
				<ol class="breadcrumb float-sm-right">

					<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                	<li class="breadcrumb-item active">Gestor Actividades</li>						
				</ol>

			</div>
		</div>	
	</div>	

</section>
<!-- /. CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">
    
    <div class="container-fluid">   

        <div class="btn-agregar-categoria btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-categoria" data-dismiss="modal"> <i class="fas fa-plus-square"></i> Agregar Actividades</button>
        </div>

        <table id="tablaActividades" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="bg-info">
                <tr>
                    <td style="width:10%;">Codigo</td>
                    <td style="width:10%;">Tema</td>
                    <td style="width:10%;">Fecha</td>
                    <td style="width:10%;">Link evidencia</td>
                    <td style="width:10%;">Programa</td>
                    <td style="width:5%;">Sesion</td>
                    <td style="width:10%;">Modalidad</td>
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
<div class="modal fade" id="modal-gestionar-categoria">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
            =MODAL HEADER
            ===============================================================-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Actividad</h4>
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
                            <input type="hidden" id ="idActividad" name ="actividad" value ="">
                            <label for="txtCodigo">Codigo</label>
                            <input type="text" class="form-control" name="codigo" id="txtCodigo" placeholder="Ingrese el codigo">
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtTema">Tema</label>
                            <input type="text" class="form-control" name="tema" id="txtTema" placeholder="Ingrese el tema">
                        </div>
                   </div>

                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtFecha">Fecha</label>
                            <input type="date" class="form-control" name="fecha" id="txtFecha" >
                        </div>
                   </div>
                      
                      <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtEvidencia">Evidencia</label>
                            <input type="text" class="form-control" name="evidencia" id="txtEvidencia" placeholder="Ingrese la evidencia">
                        </div>
                   </div>
                     
                   <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtSesion">Sesion</label>
                            <select name="sesion" id="txtSesion" class="form-control select2bs4">
                            <option value="1">Meet</option>
                                <option value="2">Zoom</option>
                                <option value="3">Jitsi</option>
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
                            <label for="txtModalidad">Modalidad</label>
                            <select name="modalidad" id="txtModalidad" class="form-control select2bs4">
                            <option value="1">Individual</option>
                                <option value="2">Grupal</option>
                               
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

  		var table = $("#tablaActividades").DataTable({
  			"ajax":{
				"url": "ajax/actividades.ajax.php",
				"type":"POST",
				"dataSrc":""
			},  			
            "columnDefs":[ 
                {
	            		"targets": 4,
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
	            		"targets": 5,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div >Meet </div> " 
	            			}
                            if(data == 2){
								return "<div> Zoom</div> " 
	            			}
                            if(data == 3){
								return "<div> Jitsi</div> " 
	            			}
                          
	            			
	            		}
	            	},
                    {
	            		"targets": 6,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div >Individual </div> " 
	            			}
                            if(data == 2){
								return "<div> Grupal</div> " 
	            			}
                           
                          
	            			
	            		}
	            	},
            		{
	            		"targets": 7,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){
	            			return "<center>" +
	                                    "<button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-categoria'> " +
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
                    {"data": "codigo"},
                    {"data": "tema"},
                    {"data": "fecha"},
                    {"data": "evidencia"},
                    {"data": "programa"},
                    {"data": "sesion"},
                    {"data": "modalidad"},
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

        $(".btn-agregar-categoria").on('click',function(){
            accion = "registrar";
        });

        $('#tablaActividades tbody').on('click','.btnEliminar',function(){
            var data = table.row($(this).parents('tr')).data();
            
            var id = data["id"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('id',id);

            swal.fire({

                title: "¡CONFIRMACION!",
                text: "Seguro que desea eliminar la actividad?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if(resultado.value)  {                    

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/actividades.ajax.php",
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
                    // alert("no se modifico la actividad");
                }

            })
        })

        $('#tablaActividades tbody').on('click','.btnEditar',function(){
            
            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $("#idActividad").val(data["id"])
            $("#txtCodigo").val(data["codigo"]);
            $("#txtTema").val(data["tema"]);
            $("#txtFecha").val(data["fecha"]);
            $("#txtEvidencia").val(data["evidencia"]);
            $("#txtSesion").val(data["sesion"]);
            $("#txtPrograma").val(data["programa"]);
            $("#txtModalidad").val(data["modalidad"]);
            

        })

        // GUARDAR LA INFORMACION DE ACTIVIDAD DESDE LA VENTANA MODAL
        $("#btnGuardar").on('click',function(){

            var id = $("#idActividad").val(),
                codigo = $("#txtCodigo").val(),
                tema = $("#txtTema").val(),
                fecha = $("#txtFecha").val(),
                evidencia = $("#txtEvidencia").val(),
                sesion = $("#txtSesion").val(),
                programa = $("#txtPrograma").val(),
                modalidad = $("#txtModalidad").val()
            
            var datos = new FormData();

            datos.append('id',id)
            datos.append('codigo',codigo)
            datos.append('tema',tema)
            datos.append('fecha',fecha)
            datos.append('evidencia',evidencia)
            datos.append('sesion',sesion)
            datos.append('programa',programa)
            datos.append('modalidad',modalidad)
            datos.append('accion',accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "¿Está seguro que desea realizar cambios en actividades?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Continuar",
                cancelButtonText: "Cancelar"
            
            }).then(resultado => {

                if(resultado.value)  {
            
                    

                    $.ajax({
                        url: "ajax/actividades.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta){
                            console.log(respuesta);

                            $("#modal-gestionar-categoria").modal('hide');
                            
                            table.ajax.reload(null,false);

                            $("#idActividad").val("");
                            $("#txtCodigo").val("");
                            $("#txtTema").val("");
                            $("#txtFecha").val("");
                            $("#txtEvidencia").val("");
                            $("#txtSesion").val("");
                            $("#txtPrograma").val("");
                            $("#txtModalidad").val("");

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