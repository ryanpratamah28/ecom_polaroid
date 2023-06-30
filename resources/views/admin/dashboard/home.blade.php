@extends('admin.layout.dashboard-admin')

@section('content-main')
    <h2 class="pageNameContent">Dashboard</h2>

    <div class="wrapper-statistic-card">
        <div class="statistic-card">
            <div class="icon-statistic-card">
                <img src="../../assets/img/approvalDocument.svg" alt="">
            </div>
            <div class="statistic-info">
                <h3 class="label-statistic">Total Kategori</h3>
                <h2 class="value-statistic">{{$categories->count()}}</h2>
            </div>
        </div>

        <div class="statistic-card">
            <div class="icon-statistic-card">
                <img src="../../assets/img/computermoney-icon.svg" alt="">
            </div>
            <div class="statistic-info">
                <h3 class="label-statistic">Total Produk</h3>
                <h2 class="value-statistic">{{$products->count()}}</h2>
            </div>
        </div>

        <div class="statistic-card">
            <div class="icon-statistic-card">
                <img src="../../assets/img/destination-icon.svg" alt="">
            </div>
            <div class="statistic-info">
                <h3 class="label-statistic">Total Orderan</h3>
                <h2 class="value-statistic">{{$orders->count()}}</h2>
            </div>
        </div>

        <div class="statistic-card">
            <div class="icon-statistic-card">
                <img src="../../assets/img/peopleIcon.svg" alt="">
            </div>
            <div class="statistic-info">
                <h3 class="label-statistic">Total Pengguna</h3>
                <h2 class="value-statistic">{{$users->count()}}</h2>
            </div>
        </div>
    </div>
@endsection
