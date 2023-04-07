<style>
    body {
        text-align: center;
    }
    div.container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>


@extends('layout')
@section('content')
    <a href="/" class="mb-4">Kembali</a>
    <h3 class="fw-bold">Edit Barang</h3>
    <form action="/update/{{ $product->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                name="product_name"value="{{ $product->product_name }}">
            @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="">Harga Barang</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price"
                id="" value="{{ $product->product_price }}">
            @error('product_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="">Foto Barang</label>
            @if ($product->product_image)
                <img src="{{ asset('storage/images/' . $product->product_image) }}" height="150px" alt="">
                <input type="hidden" name="product_image_old" value="{{ $product->product_image }}">
            @endif
            <input type="file" class="form-control" name="product_image" id="">
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
@endsection
