@extends('layouts.master')
@section('content')

@foreach($data as $p)
    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">

	   <form action="<?php echo url('updateproduk/'.$p->idProduk)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
              
        <select name="idSubKategori" id='idSubKategori' class="form-control">
        <option value="">- select sub kategori </option>
          @foreach ($subkategori as $row2)
          @if($row2->idSubKategori == $row2->idSubKategori)
            <option selected value="{{$row2->idSubKategori}}" > {{$row2->namaSub}} </option>
          @else
            <option value="{{$row2->idSubKategori}}" > {{$row2->namaSub}} </option>
          @endif
          @endforeach
          </select>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Nama </span>
                <input title="Nama"type="text" name="nama" autocomplete="off" required class="form-control" value="{{$p->nama}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi </span>
                <input title="Deskripsi"type="text" name="deskripsi" autocomplete="off" required class="form-control" value="{{$p->deskripsi}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok </span>
                <input title="Stok"type="text" name="stok" autocomplete="off" required class="form-control" value="{{$p->stok}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="Harga"type="text" name="harga" autocomplete="off" required class="form-control" value="{{$p->harga}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Gambar </span>
                <input title="Gambar"type="file" name="gambar" autocomplete="off" class="form-control" value="/image/{{ $p->gambar }}">
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
    @endforeach	
@endsection