@extends('layout/apps')
@section('konten')



    <div class="row row-cols-1 row-cols-md-4 g-3">
        @foreach ($data as $item)
            <div class="col">
                <div class="card h-100 border">
                    <img src="{{ asset('storage/images/' . $item->product_image) }}" class="card-img-top" alt=""
                        style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->product_name }}</h5>
                        <p class="card-text">Rp. {{ $item->product_price }}</p>

                        {{-- <a href="{{ url('/product/' . $item->id) }}" class="btn btn-success">Detail</a> --}}

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
@section('css')
<style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        height: 100%;
        background-color: #f7f7f7;
        z-index: 999;
        padding: 20px;
    }

    .container-fluid {
        /* Batasi lebar konten agar tidak melebar ke seluruh layar */
        max-width: 1200px;
        /* Buat elemen yang berada di sebelah kanan sidebar mulai dari posisi 250px */
        left: 250px;
        /* Tambahkan margin atas agar tidak tertutup oleh navbar */
        margin-top: 80px;
    }
</style>
@endsection
