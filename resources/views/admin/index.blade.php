@extends('../template/template1')

@section('contenido')
<main>
    <div class="container-fluid">
        <div class="card m-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Career</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $item)
                        <tr>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->career }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>     
                </div>
            </div>
        </div>
    </div>
</main>
@endsection