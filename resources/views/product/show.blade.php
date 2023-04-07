@extends('layout/apps')
@section('konten')
    <div>
        <a href="/" class="btn btn-success">Kembali</a>
        <p>
        <h1>Foto</h1><br><img src="{{ asset('storage/images/' . $data->product_image) }}" class="rounded" style="width:150px">
        </p>
        <h1>{{ $data->product_name }}</h1>
        <p>
            <b>Harga</b>{{ $data->product_price }}
        </p>

    </div>
@endsection
