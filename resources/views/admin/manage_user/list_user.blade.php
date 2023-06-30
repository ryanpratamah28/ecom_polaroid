@extends('admin.layout.dashboard-admin')

@section('content-main')
    {{-- <div class="card">
        <h5 class="card-header">All Users</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($userData as $users)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->adress}}</td>
                        <td>{{$users->phone}}</td>
                        @if ($users->role == 'user')
                            <td><span class="badge bg-label-success me-1">{{$users->role}}</span></td>
                        @else
                            @if ($users->role == 'admin')
                                <td><span class="badge bg-label-primary me-1">{{$users->role}}</span></td>
                            @endif
                        @endif
                        <td>
                            <form method="POST" action="{{ route('users.delete', $users->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger ms-1" type="submit"><i class="bx bx-trash me-1"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}

    <h2 class="pageNameContent">Manage All Users</h2>

    <div class="wrapperTable table-responsive">
        <table id="listUserTable" class="tables" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userData as $users)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->adress }}</td>
                        <td>{{ $users->phone }}</td>
                        <td>
                            @if ($users->role == 'user')
                                <div class="status status-warning">
                                    User
                                </div>
                            @else
                                @if ($users->role == 'admin')
                                    <div class="status status-primary">
                                        Admin
                                    </div>
                                @endif
                            @endif
                        </td>
                        <td>
                            <form method="POST" action="{{ route('users.delete', $users->id) }}">
                                @method('DELETE')
                                @csrf

                                <div class="buttonAction">
                                    <button class="buttons danger text-white" type="submit">
                                        Hapus
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
