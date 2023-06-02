<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{asset('css/custom-boostrap.min.css')}}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
</head>
<body>
    
    <div class="row">
        <div class="container-fluid">
            <div class="col">
                <h1>Profesores</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-9">

        </div>
        <div class="col-3">
            <div class="card" style="width: 20rem">
                <div class="card-header bg-light">
                    <h3>Ingreso de profesor</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="rut" class="form-label"><b>Rut</b></label>
                            <input type="text" class="form-control" id="rut" name="rut" maxlength="10" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Ingrese rut sin puntos y con guion.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"><b>Nombre</b></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label"><b>Apellido</b></label>
                            <input type="text" class="form-control" id="apellido" name="apellido" maxlength="20">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>