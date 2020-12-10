@extends('layouts.master')
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">all users</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>

                    <th>type</th>
                    <th>email</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                  <th>type</th>
                    <th>email</th>


                    <th class="text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $u)
                  <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->user_type->name}}</td>
                    <td>{{$u->email}}</td>


                    <td class="text-right">
                      <a href="/user/{{$u->id}}" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>


                      <a href="" class="btn btn-link btn-danger btn-just-icon remove">
                        <form action="{{ route('user.destroy', $u->id) }}" method="POST"
                       style="display: inline"
                       onsubmit="return confirm('Are you sure?');">
                     <input type="hidden" name="_method" value="DELETE">
                     {{ csrf_field() }}
                      <button type="submit" >
                     <i class="material-icons">delete</i>
                   </button>
                   </form>
                   </a>
                    </td>
                  </tr>

@endforeach

                </tbody>
              </table>
            </div>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
</div>
  @endsection
  @section('script')

  <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
  @endsection
