@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahdetail')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Create data detail pesanan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
       
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> ID Produk </span>
                    <input title="ID PRoduk"type="text" name="idProduk" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama </span>
                    <input title="Nama"type="text" name="nama" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Alamat </span>
                    <input title="Alamat"type="text" name="alamat" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Tanggal </span>
                    <input title="Tanggal"type="date" name="tanggal" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Jumlah </span>
                    <input title="Jumlah"type="text" name="jumlah" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Total Harga </span>
                    <input title="Total Harga"type="text" name="totalHarga" autocomplete="off" required class="form-control">
			</div><br>
				
		</div>
        <div class="box-footer">
			<div class="col-md-offset-10 col-md-9">			
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			</div>
		
        </div>
		</form>
		</div>
      </div>
      </div>
</section>
          <!-- /.box -->
@endsection