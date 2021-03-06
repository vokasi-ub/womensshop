@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahproduk')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Create data produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
       
        <select name="idSubKategori" id='idSubKategori' class="form-control">
        <option value="">- select produk </option>
          @foreach ($data as $row)
            <option value="{{$row->idSubKategori}}"> {{$row->namaSub}} </option>
          @endforeach
          </select>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama </span>
                    <input title="Nama"type="text" name="nama" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi </span>
                    <input title="Deskripsi"type="text" name="deskripsi" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Stok </span>
                    <input title="Stok"type="text" name="stok" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Harga </span>
                    <input title="Harga"type="text" name="harga" autocomplete="off" required class="form-control">
			</div><br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Gambar </span>
                    <input title="Gambar"type="file" name="gambar" autocomplete="off" required class="form-control">
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