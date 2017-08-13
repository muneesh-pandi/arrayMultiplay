
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
