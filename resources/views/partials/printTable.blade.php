<!-- Default box -->
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">{{$title}}</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
              title="Collapse">
        <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    {{-- <h2>Section title</h2> --}}
     <div class="table-responsive  col-md-6 col-md-offset-3">
       <table class="table table-striped table-bordered">
         <tbody>
           <tr>
               <th> </th>

                 @foreach($array1 as $k=> $a2Data)
                   <th>{{$a2Data}}</th>
                 @endforeach

          </tr>

                  @foreach($array2 as $a=> $a1)
                        <tr>
                            <th>{{$a1}}</th>
                            @forelse($matrix  as $key => $m)
                              <td>  {{$matrix[$key][$a]}}   </td>
                            @empty
                              <td>0</td>
                            @endforelse
                        </tr>
                  @endforeach

         </tbody>
       </table>
     </div>
  </div>
  <!-- /.box-body -->




</div>
