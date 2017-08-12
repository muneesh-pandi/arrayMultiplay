<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iTalent::Interview Task</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">


          <!--Begin Modal -->
          <div class="modal fade" id="showModel" tabindex="-1" role="dialog" aria-hidden="false" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Task3</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h1 align="center">This is new layer, the button cannot be clicked anymore.</h1>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
              </div>
            </div>
          </div>  <!-- End Model -->
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>i</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>iTalent</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>


    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Muneesh</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Task 1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Task 2</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Task 3</a></li>
          </ul>
        </li>



              </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Interview Task

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Interview</a></li>
        <li class="active">Task 1 </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-12 hidden">
      <!-- Default box -->
        @include('partials.printTable')
      <!-- /.box -->
    </div>   <!-- /.Col-md-6 -->

    <div class="col-md-6" id="arrayResult" align="center">
        @include('partials.printTable')
    </div>

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

      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Task3</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
        <button class="btn btn-primary" data-toggle="modal" data-target="#showModel">Show</button>
      </div>
    </div>

      </div>

      </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017 <a href="https://adminlte.io">iTalent</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/js')}}/validation/vendor/bootstrap/js/bootstrapValidator.js"></script>
<script src="{{ asset('/js')}}/validation/dist/js/formValidation.js"></script>
<script src="{{ asset('/js')}}/validation/dist/js/framework/bootstrap.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

          <script>
          $(document).ready(function() {
              $('#arrayForm').formValidation({
                  framework: 'bootstrap',
                  icon: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      array1: {
                          validators: {
                              notEmpty: {
                                  message: 'Array1 is required'
                              },
                              numeric: {
                                  message: 'The value is not a number',

                                },
                                between: {
                                             min: 1,
                                             max: 10,
                                             message: 'The array size should be 1 - 10'
                                         }
                          }
                      },
                      array2: {
                          validators: {
                              notEmpty: {
                                  message: 'Array2 is required'
                              },
                              numeric: {
                                  message: 'The value is not a number',

                                },
                                between: {
                                             min: 1,
                                             max: 10,
                                             message: 'The array size should be 1 - 10'
                                         }
                          }
                      }
                  }
              }).on('success.form.fv', function(e) {
    // Prevent form submission
          e.preventDefault();

             var $form = $(e.target),
              fv    = $(e.target).data('formValidation');

          $.ajax({
              url: '{{url('home')}}',
              data:  $form.serialize(),
              cache: false,
              type: 'POST',
              headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       },

              success: function(result) {
                  $("#arrayResult").html('<img src="dist/img/circle-2.gif"  alt=""/> &nbsp; Loading ...').delay(2000).fadeIn('slow', function(){
                  $("#arraySubmit").html('Submit');
                  $("#arrayResult").html(result);
                  $('#arrayForm').bootstrapValidator('resetForm', true);
           }); // End Loading function  .
            }

          });
          }); // ajax end

          });
          </script>

</body>
</html>
