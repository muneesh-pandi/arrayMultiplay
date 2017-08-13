@extends('main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1> Interview Task </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Interview</a></li>
    <li class="active">Task 2 </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="col-md-12 hidden">
    <!-- Default box -->
    @include('partials.printTable')
    <!-- /.box -->
  </div>
  <!-- /.Col-md-6 -->

  <div class="col-md-6" id="arrayResult" align="center"> @include('partials.printTable') </div>
  <div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Task2</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <!-- form start -->
        <form class="form-horizontal" id="arrayForm"  method="post"   >
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Array1</label>
            <div class="col-sm-8">
              <input class="form-control" id="array1" placeholder="Array1" type="text" name="array1">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Array2</label>
            <div class="col-sm-8">
              <input class="form-control" id="array2" placeholder="Array2" type="text" name="array2">
            </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer" align="center">
            <button type="submit" class="btn btn-info" id="arraySubmit">Submit</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
    </div>
    <!-- /.box -->

  </div>

  </div>
</section>
<!-- /.content -->
@endsection
