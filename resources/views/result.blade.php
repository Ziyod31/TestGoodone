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
                        <th>Mahsulot nomi</th>
                        <th>Xomashyo</th>
                        <th>Soni</th>
                    </tr>
                </thead>
                <tbody>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>
                        @foreach($product->materials as $material)
                        {{$material->name}} <br>
                        @endforeach
                    </td>

                    <td>
                        @foreach($product->materials as $material)
                        {{ $material->pivot->quantity }} <br>
                        @endforeach
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
@endsection