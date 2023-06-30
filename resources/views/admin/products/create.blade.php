@extends('admin.layout.dashboard-admin')

@section('content-main')
    <div class="card">
        <div class="card-body">
            <h5 class="mb-4">Tambah Produk</h5>
            <form action="{{ route('dashboard.store.product') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Produk</label>
                    <input type="text" class="form-control" placeholder="Chargeran Handphone" name="name" />
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                        name="category_id">
                        <option selected hidden>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Thumbnail</label>
                    <input class="form-control" type="file" name="thumb_img" />
                    @error('thumb_img')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Deskripsi</label>
                    <input type="text" class="form-control" placeholder="Ini adalah chargeran handphone kualitas terbaik"
                        name="description" />
                    @error('description')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Harga</label>
                    <input type="number" class="form-control" placeholder="Rp. 250.000 ( Isi dengan angka saja)"
                        name="price" />
                    @error('price')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
@endsection
