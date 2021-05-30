<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD|imagenes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h3>Lista de estudiantes <a href="{{ route('students.create') }}"
                        class="btn btn-success float-right">Crear estudiante</a></h3>
                <hr>
            </div>
            @foreach ($students as $student)
                <div class="col-md-4">
                    <div class="card mb-2">
                        @if ($student->image != '' && file_exists(public_path('images/' . $student->image)))
                            <img class="card-img-top" src="{{ asset('images/' . $student->image) }}"
                                alt="Card image cap" width="100" height="180">
                        @else
                            <img class="card-img-top" src="{{ asset('images/contenido-no-disponible.jpg') }}"
                                alt="Card image cap" width="100" height="180">
                        @endif
                        <div class="card-body">
                            <h3 class="card-title">{{ $student->name }}</h3>
                            <small class="form-text text-muted">{{ $student->created_at->diffForHumans() }}</small>
                            <form action="{{ route('students.destroy', $student->id) }}" method="post"
                                class="float-right">
                                @csrf @method('DELETE')
                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="btn btn-secondary">Editar</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
    @if (session('status'))
        <script>
            toastr.error("{!! session('status') !!}");
        </script>
    @endif
</body>

</html>
