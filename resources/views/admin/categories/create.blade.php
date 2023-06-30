@extends('admin.layout.dashboard-admin')

@section('content-main')
    <div class="card">
        <div class="card-body">
            <h5 class="mb-4">Buat Kategori Produk</h5>

            <form action="{{route('dashboard.store.category')}}" method="POST" enctype="multipart/form-data">
                @csrf 

                <div class="mb-4">
                    <label class="form-label" for="basic-default-fullname">Nama Kategori</label>
                    <input type="text" class="form-control" placeholder="Gadget" name="name"/>
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="formFile" class="form-label">Gambar Thumbnail</label>
                    <input class="form-control" type="file"  name="thumb_img" />
                    @error('thumb_img')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
@endsection
