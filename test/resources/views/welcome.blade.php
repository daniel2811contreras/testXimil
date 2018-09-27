<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
        
        <link rel="stylesheet" href="https://6e06cb2ff59a4c079f07907b449835c7.vfs.cloud9.us-east-1.amazonaws.com:8080/css/myStyle.css" type="text/css" />
    </head>
    <body>
        <div class="container-fluid __home">
            <div class="row">
                
                <div class="col-md-8">
                    <div class="jumbotron">
                            <table data-toggle="table" id="table"
                               data-pagination="true"
                               data-side-pagination="server"
                               data-page-list="[5, 10, 20, 50, 100, 200]"
                               data-search="true"
                            >
                                <thead>
                                <tr>
                                    <th data-field="name">nombre</th>
                                    <th data-field="last_name">apellido</th>
                                    <th data-field="document">documento</th>
                                    <th data-field="email">correo</th>
                                    <th data-field="phone">telefono</th>
                                    <th data-field="address">dirección</th>
                                    
                                </tr>
                                </thead>
                                    
                                    
                                <tbody>
                                    <?php
                                        foreach ($clientes as $data) {
                                            echo '<tr>
                                            <td>'.$data->name.'</td>
                                            <td>'.$data->last_name.'</td>
                                            <td>'.$data->document.'</td>
                                            <td>'.$data->email.'</td>
                                            <td>'.$data->phone.'</td>
                                            <td>'.$data->address.'</td>
                                            </tr>';
                                        }
                                    ?>
                                </tbody>    
                                    
                            </table>
                            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jumbotron">
                        <div>
                            <form method="POST" action="/cliente/create">
                                @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="name" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" name="last_name" id="apellido" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <label for="documento">Documento</label>
                                <input type="text" class="form-control" name="document" id="documento" placeholder="Documento">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" name="phone" id="telefono" placeholder="Telefono">
                            </div>
                            <div class="form-group">
                                <label for="direccion">dirección</label>
                                <input type="text" class="form-control" name="address" id="direccion" placeholder="dirección">
                            </div>
                            
                                
                            <button type="submit" id="crear" class="btn btn-success">Crear</button>
                        </div>
                        </form>
                    </div>
                </div> 
                <div class="col-md-12">
                    <a href="https://github.com/djdantras/testXimil">repositorio</a>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
        
        <!-- Latest compiled and minified Locales -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-es-AR.min.js"></script>    
        <script>
        $(document).ready(function() {
            // console.log('ok');
            var info={};
            var url='https://6e06cb2ff59a4c079f07907b449835c7.vfs.cloud9.us-east-1.amazonaws.com:8080/';
            
            
        });    
        </script>
    </body>
</html>
