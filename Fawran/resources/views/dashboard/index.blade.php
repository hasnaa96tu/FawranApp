@extends('layouts.master')
@section('content')

<div class="content">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <p class="card-category">pending orders</p>
              <h3 class="card-title">184</h3>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <p class="card-category">active orders</p>
              <h3 class="card-title">245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <p class="card-category">delivered orders</p>
              <h3 class="card-title">245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <p class="card-category"> cancelled orders</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">

              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="card card-chart">
            <div class="card-header card-header-rose" data-header-animation="true">
              <div class="ct-chart " id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Revenue</h4>
              <p class="card-category">delivered orders $88888</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-chart">
            <div class="card-header card-header-success" data-header-animation="true">
              <div class="ct-chart  " id="websiteViewsChart2"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Orders</h4>
              <p class="card-category">
                 total orders placed  755</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>

      </div>

      <h3> Resturants Orders</h3>
      <br>
      <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
        <div class="page-categories ">

          <br />
          <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-left" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#link7" role="tablist">
                 pending
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " data-toggle="tab" href="#link8" role="tablist">
                active
              </a>
            </li>

          </ul>
          <div class="tab-content tab-space tab-subcategories">
            <div class="tab-pane" id="link7">
              <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">autorenew</i>
                    </div>

                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">autorenew</i>
                    </div>
                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">autorenew</i>
                  </div>

                  <p class="card-category">order date: may 11 2020. 5:30pm</p>
                  <h3 class="card-title">2x large peperoni pizza </h3>
                    <p class="card-category"> distance 1km</p>
                </div>
                <div class="card-footer">
                  <div class="price">
                    <h4>price $899</h4>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-sm ">reject</button>
                    <button type="button" class="btn btn-sm ">confirm</button>

                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">autorenew</i>
                  </div>
                  <p class="card-category">order date: may 11 2020. 5:30pm</p>
                  <h3 class="card-title">2x large peperoni pizza </h3>
                    <p class="card-category"> distance 1km</p>
                </div>
                <div class="card-footer">
                  <div class="price">
                    <h4>price $899</h4>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-sm ">reject</button>
                    <button type="button" class="btn btn-sm ">confirm</button>

                  </div>
              </div>
            </div>
          </div>
            </div>
          </div>
            <div class="tab-pane active" id="link8">
                <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">check_circle</i>
                    </div>
                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>
                </div>
              </div>
            </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">check_circle</i>
                    </div>
                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>
                </div>
              </div>
            </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">check_circle</i>
                    </div>
                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>
                </div>
              </div>
            </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">check_circle</i>
                    </div>
                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>
                </div>
              </div>
            </div>
            </div>

          </div>
      </div>

      <h3> Pharmacies Orders</h3>
      <br>
      <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
        <div class="page-categories ">

          <br />
          <ul class="nav nav-pills nav-pills-rose nav-pills-icons justify-content-left" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                 pending
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " data-toggle="tab" href="#link3" role="tablist">
                active
              </a>
            </li>

          </ul>
          <div class="tab-content tab-space tab-subcategories">
            <div class="tab-pane" id="link2">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">autorenew</i>
                      </div>

                      <p class="card-category">order date: may 11 2020. 5:30pm</p>
                      <h3 class="card-title">2x large peperoni pizza </h3>
                        <p class="card-category"> distance 1km</p>
                    </div>
                    <div class="card-footer">
                      <div class="price">
                        <h4>price $899</h4>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-sm ">reject</button>
                        <button type="button" class="btn btn-sm ">confirm</button>

                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">autorenew</i>
                      </div>
                      <p class="card-category">order date: may 11 2020. 5:30pm</p>
                      <h3 class="card-title">2x large peperoni pizza </h3>
                        <p class="card-category"> distance 1km</p>
                    </div>
                    <div class="card-footer">
                      <div class="price">
                        <h4>price $899</h4>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-sm ">reject</button>
                        <button type="button" class="btn btn-sm ">confirm</button>

                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">autorenew</i>
                    </div>

                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">autorenew</i>
                    </div>
                    <p class="card-category">order date: may 11 2020. 5:30pm</p>
                    <h3 class="card-title">2x large peperoni pizza </h3>
                      <p class="card-category"> distance 1km</p>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4>price $899</h4>
                    </div>

                    <div class="btn-group">
                      <button type="button" class="btn btn-sm ">reject</button>
                      <button type="button" class="btn btn-sm ">confirm</button>

                    </div>
                </div>
              </div>
            </div>
            </div>
          </div>
            <div class="tab-pane active" id="link3">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">check_circle</i>
                        </div>
                        <p class="card-category">order date: may 11 2020. 5:30pm</p>
                        <h3 class="card-title">2x large peperoni pizza </h3>
                          <p class="card-category"> distance 1km</p>
                      </div>
                      <div class="card-footer">
                        <div class="price">
                          <h4>price $899</h4>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-sm ">reject</button>
                          <button type="button" class="btn btn-sm ">confirm</button>

                        </div>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">check_circle</i>
                        </div>
                        <p class="card-category">order date: may 11 2020. 5:30pm</p>
                        <h3 class="card-title">2x large peperoni pizza </h3>
                          <p class="card-category"> distance 1km</p>
                      </div>
                      <div class="card-footer">
                        <div class="price">
                          <h4>price $899</h4>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-sm ">reject</button>
                          <button type="button" class="btn btn-sm ">confirm</button>

                        </div>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">check_circle</i>
                        </div>
                        <p class="card-category">order date: may 11 2020. 5:30pm</p>
                        <h3 class="card-title">2x large peperoni pizza </h3>
                          <p class="card-category"> distance 1km</p>
                      </div>
                      <div class="card-footer">
                        <div class="price">
                          <h4>price $899</h4>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-sm ">reject</button>
                          <button type="button" class="btn btn-sm ">confirm</button>

                        </div>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">check_circle</i>
                        </div>
                        <p class="card-category">order date: may 11 2020. 5:30pm</p>
                        <h3 class="card-title">2x large peperoni pizza </h3>
                          <p class="card-category"> distance 1km</p>
                      </div>
                      <div class="card-footer">
                        <div class="price">
                          <h4>price $899</h4>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-sm ">reject</button>
                          <button type="button" class="btn btn-sm ">confirm</button>

                        </div>
                    </div>
                  </div>
                </div>
            </div>

          </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
  @section('script')
  <!-- Chartist JS -->

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      md.initDashboardPageCharts();
    });
  </script>
  @endsection
