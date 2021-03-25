@extends('../template/template1')

@section('contenido')
<main>
    <br>
    <div class="container-fluid">
        <h1 class="text-center"><strong>Registrar Estudiante</strong></h1>
        <div class="card m-4">
            <div class="card-body">
                <div class class="col-sm-8 mb-4">
                    @if(session('mensaje'))
                <div class="alert alert-success">{{session('mensaje')}}</div>
                    @endif
                <form action="{{ route('studentlist.create') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="text" class="form-control"name="name" id="name" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="text" class="form-control" name="code" id="code" placeholder="Codigo">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="text" class="form-control"name="career" id="career" placeholder="Carrera">
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
    </div>
</main>
@endsection