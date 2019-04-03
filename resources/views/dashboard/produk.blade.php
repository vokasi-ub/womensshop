@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">PRODUK</h3>
              <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
              <a href="{{url('tambahdataproduk')}}"> Create </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>ID Produk</th>
                  <th>ID Sub Kategori</th>
                  <th>Nama Produk</th>
                  <th>Deskripsi Produk</th>
                  <th>Stok</th>
                  <th>Harga Produk</th>
                  <th>Foto Produk</th>
                  <th>Options</th>
                </tr>
                <?php $no=1; ?>
                @foreach ($dataproduk as $row)
                <tr>
            
                    <th>{{ $no++ }}</th>
                    <th>{{ $row->idSubKategori }}</th>
                    <th>{{ $row->nama}}</th>
                    <th>{{ $row->deskripsi }}</th>
                    <th>{{ $row->stok }}</th>
                    <th>{{ $row->harga }}</th>
                    <th>{{ $row->gambar }}</th>
                    <th> 
                        <a href="editproduk/{{$row->idProduk}}">Edit</a>
                        <a href="hapusproduk/{{$row->idProduk}}">Delete</a>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
</section>
          <!-- /.box -->
@endsection

