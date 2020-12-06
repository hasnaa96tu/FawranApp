@extends('layouts.master')
@section('content')

<div class="content">
  <div class="content">
    <div class="container-fluid">


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
              <div class="col-4">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                    <br>
                    <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                    <br>
                    <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
              <div class="col-4">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
              <div class="col-4">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
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
                        <br>
                        <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                        <br>
                        <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                      <br>
                      <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
              <div class="col-4">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
            </div>
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
                          <br>
                          <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                          <br>
                          <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                          <br>
                          <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
                          <br>
                          <a href="/order/id"><button class="btn btn-sm ">more details<div class="ripple-container"></div></button></a>

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
