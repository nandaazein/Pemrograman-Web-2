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
    <h3 class="fw-bold">Tambah Barang</h3>
    <form action="/simpan" method="post" enctype="multipart/form-data" class="mt-7">
        @csrf
        <div class="form-group mb-3">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                name="product_name"id="">
            @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="">Harga Barang</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price"
                id="">
            @error('product_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="">Foto Barang</label>
            <input type="file" class="form-control" name="product_image" id="">
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
@endsection
