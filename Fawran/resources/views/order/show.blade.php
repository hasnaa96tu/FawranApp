
@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title ">order details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      no.
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      value
                    </th>

                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        order type
                      </td>
                      <td>
                        resturant
                      </td>

                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                        request date
                      </td>
                      <td>
                        11/2/2020 5:00pm
                      </td>

                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                        end date
                      </td>
                      <td>
                        11/2/2020 5:30pm
                      </td>

                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>
                        status
                      </td>
                      <td>
                        active
                      </td>

                    </tr>
                    <tr>
                      <td>
                        5
                      </td>
                      <td>
                        distance
                      </td>
                      <td>
                        1km
                      </td>

                    </tr>
                    <tr>
                      <td>
                        6
                      </td>
                      <td>
                      cost
                      </td>
                      <td>
                      200$
                      </td>

                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title ">meals</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      no.
                    </th>
                    <th>
                      meal
                    </th>
                    <th>
                      number
                    </th>

                  </thead>
                  <tbody>


                    <tr>

                      <td>
                      1
                      </td>
                      <td>
                      tornado
                      </td>
                      <td>
                      3
                      </td>
                    </tr>
                    <tr>

                      <td>
                      2
                      </td>
                      <td>
                      sezar salad
                      </td>
                      <td>
                      2
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
  @endsection
