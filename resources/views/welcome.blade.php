@extends('layout')

@section('content')
    <div class="d-flex justify-content-between">
        <div>
            <h3 class="fw-bold mb-4">Data Product</h3>
        </div>
        <div>
            <a href="/tambah" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    {{-- Pesan Sukses --}}

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-boredered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($products as $Product)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $Product->product_name }}</td>
                        <td>@currency($Product->product_price)</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $Product->product_image) }}" height="120px" alt="">
                        </td>
                        <td>
                            <a href="/edit/{{ $Product->id }}" class="btn btn-success">Edit</a>

                            <form action="/destroy/{{ $Product->id }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
