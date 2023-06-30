@extends('admin.layout.dashboard-admin')

@section('content-main')
    <div class="card">
        <div class="card-body">
            <h5 class="mb-4">Edit Kategori</h5>

            <form action="{{ route('update.category', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="form-label" for="basic-default-fullname">Nama Kategori</label>
                    <input type="text" class="form-control" placeholder="Toys" name="name" value="{{ $category->name }}" />
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

                <a href="{{ route('category') }}" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </form>
        </div>
    </div>
@endsection

{{-- action="/category/update/{{ $category['id'] }}" --}}
