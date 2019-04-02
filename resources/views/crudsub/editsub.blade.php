@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
             @foreach ($datasub as $row2)

	   <form action="{{ url('updatesub/'.$row2->idSubKategori) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data kategori</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
              
                <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-tags"></i> ID Kategori </span>
                        <input title="Nama Kategori"type="text" name="idKategori" autocomplete="off" required class="form-control" value="{{$row2->idKategori}}">
				</div><br>
				<div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Sub Kategori </span>
                        <input title="Nama Kategori"type="text" name="namaSub" autocomplete="off" required class="form-control" value="{{$row2->namaSub}}">
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