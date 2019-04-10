@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">PRODUK ATASAN</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Stok</th>
                  <th>Harga</th>
                </tr>

                <tr>
                  <th>1</th>
                  <th>Blouse Leya </th>
                  <th>10</th>
                  <th>Rp 75.000</th>
                </tr>

                <tr>
                  <th>2</th>
                  <th>Dress Vintage </th>
                  <th>5</th>
                  <th>Rp 70.000</th>
                </tr>

                <tr>
                  <th>3</th>
                  <th>Jacket Jeans </th>
                  <th>10</th>
                  <th>Rp 100.000</th>
                </tr>

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

