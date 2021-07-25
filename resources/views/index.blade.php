@extends('layout.welcome')

@section('content')
<main class="py-4">
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Xomashyo nomi</th>
                        <th>Qoldiq</th>
                        <th>Narx</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($warehouses as $warehouse)
                    <tr>
                        <td>{{$warehouse->id}}</td>
                        <td>{{$warehouse->material->name}}</td>
                        <td>{{$warehouse->remainder}}</td>
                        <td>{{$warehouse->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
@endsection