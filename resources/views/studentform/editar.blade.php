@extends('../template/template1')

@section('contenido')
<main>
    <br>
    <div class="container-fluid">
        <h1 class="text-center"><strong>Editar Estudiante</strong></h1>
        <div class="card m-4">
            <div class="card-body">
                <form action="{{ route('studentlist.update', $student->id) }}" method="POST">
                @method("PUT")
                    @csrf
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="text" class="form-control"name="name" id="name" placeholder="Nombre" value="{{ $student->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="text" class="form-control" name="code" id="code" placeholder="Codigo" value="{{ $student->code }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="text" class="form-control"name="career" id="career" placeholder="Carrera" value="{{ $student->career }}">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success col-2">Guardar</button>
                    <a href="{{ route('studentlist.index') }}" class="btn btn-danger col-2">Cancelar</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection