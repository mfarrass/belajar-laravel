@extends('layouts.mainlayout')

@section('title', 'Class')

@section('content')    
        <h1>Ini Halaman Class</h1>
        <h3>Class List</h3> 

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                {{-- membuat perulangan, ngambil data dari database --}}
                {{-- classlist diambil dari controller yg berada pada database --}}
                @foreach ($classList as $data)
                    <tr>
                        {{-- iteration = perulangan sebuah angka  --}}
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection