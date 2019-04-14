@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DETAIL PESANAN</h3>
              <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
              <a href="{{url('tambahdatadetail')}}"> Create </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>ID Pesanan</th>
                  <th>ID Produk</th>
                  <th>Nama Produk</th>
                  <th>Alamat Pemesan</th>
                  <th>Tanggal Pesan</th>
                  <th>Jumlah Pesanan</th>
                  <th>Total Tagihan</th>
                  <th>Options</th>
                </tr>
                
                <?php $no=1; ?>
                @foreach ($datadetail as $row)
                <tr>
            
                    <th>{{ $no++ }}</th>
                    <th>{{ $row->idProduk }}</th>
                    <th>{{ $row->nama }}</th>
                    <th>{{ $row->alamat }}</th>
                    <th>{{ $row->tanggal }}</th>
                    <th>{{ $row->jumlah }}</th>
                    <th>{{ $row->totalHarga }}</th>
                    <th> 
                        <a href="hapusdetail/{{$row->idPesanan}}" onClick="return confirm('Are you sure to delete?')"
                          class="btn default"> <i class="fa fa-trash-o"> </i>Delete</a>
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

