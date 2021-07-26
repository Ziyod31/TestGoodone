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
<div class="card shadow mb-4">
    <h1>Maxsulotlar</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Mahsulot nomi</th>
                        <th>Xomashyo nomi</th>
                        <th>Xomashyo Soni</th>
                    </tr>
                </thead>
                @foreach($products as $product)
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
                @endforeach
            </table>
        </div>
    </div>
</div>

</main>
@endsection