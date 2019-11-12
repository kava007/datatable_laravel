<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataTables</title>


        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    

    </head>
    <body>
        <div class="container">

            <table id="users" class="table table-striped table-bordered" style="width:100%">

                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th width="120px">&nbsp;</th>
                    </tr>   
                 </thead>    
                 
            </table>    
          
        </div>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

        
        <script type="text/javascript">
            $(document).ready(function() {


                 $('#users').DataTable({

                    "serverSide" : true,
                    "ajax"       : "{{ url('api/users') }}",
                    "columns"    : [

                       {data: 'id'},
                       {data: 'name'},
                       {data: 'email'},
                       {data: 'btn'}

                    ],
                    "language" : {
                        "info"   : "_TOTAL_ registros",
                        "search" : "Buscar",
                        "paginate" : {
                            "next" : "Siguiente",
                            "previous" : "Anterior",

                        },
                        "lengthMenu" : 'Mostrar <select>' +
                                       '<option value="10">10</option>'+
                                       '<option value="30">30</option>'+
                                       '<option value="-1">Todos</option>'+
                                       '</select> registros',
                        "loadingRecords" : "Cargando...",   
                        "processing"     : "Procesando...", 
                        "emptyTable"     : "No hay datos",  
                        "zeroRecords"    : "No hay coincidencias", 
                        "info"           : "Mostrando página _PAGE_ of _PAGES_", 
                        "infoEmpty"      : "iz",  
                        "infoFilter"     : "de",             
                    }

                 });


            });
        </script>


    </body>
</html>
