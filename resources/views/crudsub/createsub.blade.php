@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahsub')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Create Data Kategori</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>

        
        
        <select name="idKategori" id='idKategori' class="form-control">
        <option value="">- select kategori </option>
          @foreach ($datasub as $row)
            <option value="{{$row->idKategori}}" > {{$row->namaKategori}} </option>
          @endforeach
          </select>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Sub </span>
                    <input title="Nama Sub"type="text" name="namaSub" autocomplete="off" required class="form-control">
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