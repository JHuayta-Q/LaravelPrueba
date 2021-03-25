@extends('../template/template1')

@section('contenido')
<main>
    <br>
    <div class="container-fluid">
        <h1 class="text-center"><strong>Lista de Estudiantes</strong></h1>
        <div class="card m-4">
            <div class="card-body">
                <div class class="col-sm-8 mb-4">
                    @if(session('mensaje'))
                <div class="alert alert-success">{{session('mensaje')}}</div>
                    @endif
                    @if(session('mensaje1'))
                    <div class="alert alert-warning">{{session('mensaje1')}}</div>
                        @endif
                <div class="table-responsive">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Cod</th>
                            <th>Career</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $item)
                        <tr>  
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->career }}</td>
                            <td>
                                <a href="{{ route('studentlist.edit', $item) }}" class="btn btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>    
                                <a href="" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>  
                                </a>                        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>     
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{$student->render()}}
                    </div>
                </div>
                <br>  
                <a href="{{ route('studentlist.form') }}" class="col-2 btn btn-primary">Registrar</a>
            </div>
        </div>
    </div>
</main>
@endsection