<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Senati_Per%C3%BA_logo.svg" alt="">

            </div>
            </div> 
        
        <h1 style="font-size: 15px">Lista Personas</h1>
        
       
        <table class="table" style="font-size: 12px">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                
                <th scope="col">Paterno</th>
                <th scope="col">Materno</th>
                <th scope="col">Documento</th>
                <th scope="col">Celular</th>
                
                
                </tr>

            </thead>
            <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $persona['nombres'] }}</td>
                        <td>{{ $persona['paterno'] }}</td>
                        <td>{{ $persona['materno'] }}</td>
                        <td>{{ $persona['documento'] }}</td>
                        <td>{{ $persona['celular'] }}</td>
                        
                       
                    </tr>
                @endforeach
            </tbody>
            </table>    

    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>