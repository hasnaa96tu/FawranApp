@extends('layouts.master')
@section('content')

<div class="content">
  <div class="container-fluid">
    @if ($message = Session::get('success'))
       <div class="alert alert-success">
           <p>{{ $message }}</p>
       </div>
   @endif
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">all customers</h4>
              @can('customer-create')
              <a href="/customer/create">   <button class="btn btn-rose float-right">add customer<div class="ripple-container"></div></button></a>
              @endcan
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
                    <th>phone number</th>
                    <th>home address</th>
                    <th>email</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>phone number</th>
                    <th>home address</th>
                    <th>email</th>


                    <th class="text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>

                    @foreach($cus as $c)
                            <tr>
                    <td>{{$c->fullname}}</td>
                    <td>{{$c->phone_number}}</td>
                    <td>{{$c->location}}</td>
                    <td>{{$c->user->email}}</td>

                    <td class="text-right">
                      <a href="/customer/{{$c->id}}" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                        @can('customer-edit')
                      <a href="{{ route('customer.edit', $c->id) }}" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                       @endcan
                       @can('product-delete')
                      <a href="" class="btn btn-link btn-danger btn-just-icon remove">
                        <form action="{{ route('customer.destroy', $c->id) }}" method="POST"
                       style="display: inline"
                       onsubmit="return confirm('Are you sure?');">
                     <input type="hidden" name="_method" value="DELETE">
                     {{ csrf_field() }}
                      <button type="submit" >
                     <i class="material-icons">delete</i>
                   </button>
                   </form>
                   </a>
                   @endcan
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
