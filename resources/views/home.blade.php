{{-- layout = lokasi folder, mainlayout = nama folder didalamnya --}}
@extends('layouts.mainlayout')

{{-- title = pemanggilan, Home = valuenya --}}
@section('title', 'Home')

@section('content')    
    <div class="container mt-4">
        <h1>Ini Halaman Home</h1>
        <h2>Selamat Datang {{ $name }} peran anda sebagai {{ $role }}</h2>

            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                </tr>
                <tr>
                    @foreach($buah as $data) 
                </tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data }}</td>
                @endforeach
            </table>
    </div>
@endsection