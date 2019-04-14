@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">SUB KATEGORI FASHION</h3>
              <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
              <a href="{{url('tambahdatasub')}}"> Create </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>ID Sub Kategori</th>
                  <th>ID Kategori</th>
                  <th>Nama Sub Kategori</th>
                  <th>Options</th>
                </tr>
                <?php $no=1; ?>
                @foreach ($datasub as $key=>$row)
                <tr>
            
                    <th>{{ $no++ }}</th>
                    <th>{{ $row->kategoriModel->namaKategori }}</th>
                    <th>{{ $row->namaSub }}</th>
                    <th> 
                        <a href="editsub/{{$row->idSubKategori}}">Edit</a>
                        <a href="hapussub/{{$row->idSubKategori}}" onClick="return confirm('Are you sure to delete?')"
                          class="btn default"> <i class="fa fa-trash-o"> </i>Delete</a>
                    </tr>
                @endforeach
              </table>
          </div>
</section>
          <!-- /.box -->
@endsection

