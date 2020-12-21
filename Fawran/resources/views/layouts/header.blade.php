<div class="sidebar" data-color="rose" data-background-color="black" >
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="" class="simple-text logo-mini">

    </a>
    <a href="" class="simple-text logo-normal">
      <img src='/assets/img/fawran2.PNG' style="width:150px">
    </a></div>
  <div class="sidebar-wrapper">

    <div class="user">

      <div class="photo">
        <img src="/assets/img/faces/avatar.jpg" />
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>
              @guest
            @else
            {{ Auth::user()->name }}
           @endguest
            <b class="caret"></b>
          </span>
        </a>
          @guest
            @else
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/user/{{Auth::user()->id}}">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user/{{Auth::user()->id}}/edit">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal"> Edit Profile </span>
              </a>
            </li>
          </ul>
        </div>
         @endguest
      </div>

    </div>

    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
          <i class="material-icons">dashboard</i>
          <p class="">
          dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/users/supermarket">
          <i class="material-icons">fastfood</i>
          <p class="">
            supermarket
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/pharmacy">
          <i class="material-icons">local_pharmacy</i>
          <p class="">
            pharmacy
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/company">
          <i class="material-icons">local_pharmacy</i>
          <p class="">
            Companies
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/drug">
          <i class="material-icons">local_pharmacy</i>
          <p class="">
            Drugs
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/driver">
          <i class="material-icons">directions_bike</i>
          <p class="">
          drivers
          </p>
        </a>
      </li>
      @guest
      @else
      @if( Auth::user()->getRoleNames() == 'customer'  )
      <li class="nav-item">
        <a class="nav-link" href="/order/{{Auth::user()->id}}/customer">
          <i class="material-icons">receipt</i>
          <p class="">
          orders
          </p>
        </a>
      </li>
      @else
      @can('order-list')
      <li class="nav-item">
        <a class="nav-link" href="/order">
          <i class="material-icons">receipt</i>
          <p class="">
          orders
          </p>
        </a>
      </li>
      @endcan
      @endif
      @endguest
      <li class="nav-item">
        <a class="nav-link" href="/promo">
          <i class="material-icons">local_atm</i>
          <p class="">
          promotions
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#22">
          <i class="material-icons">account_box</i>
          <p> users
  <b class="caret"></b>
          </p>
        </a>
      </li>
        <div class="collapse" id="22">
      <li class="nav-item ">
        @can('user-list')
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
          <i class="material-icons">face</i>
          <p> User
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/user/create">
                <span class="sidebar-mini"> au </span>
                <span class="sidebar-normal"> add User</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/user">
                <span class="sidebar-mini"> alu </span>
                <span class="sidebar-normal">all Users </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/user/show">
                <span class="sidebar-mini"> su </span>
                <span class="sidebar-normal"> show User </span>
              </a>
            </li>


          </ul>
        </div>
        @endcan
      </li>
      <li class="nav-item ">
        @can('customer-list')
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples2">
          <i class="material-icons">face</i>
          <p> Customer
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples2">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/customer/create">
                <span class="sidebar-mini"> ac </span>
                <span class="sidebar-normal"> add Customer</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/customer">
                <span class="sidebar-mini"> alc </span>
                <span class="sidebar-normal">all Customers </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/customer/show">
                <span class="sidebar-mini"> sc </span>
                <span class="sidebar-normal"> show Customer </span>
              </a>
            </li>


          </ul>
        </div>
        @endcan
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples3">
          <i class="material-icons">face</i>
          <p> Resturant
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples3">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/users/resturant/create">
                <span class="sidebar-mini"> ar </span>
                <span class="sidebar-normal"> add Resturant </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/resturant">
                <span class="sidebar-mini"> alr </span>
                <span class="sidebar-normal">all Resturants  </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/resturant/show">
                <span class="sidebar-mini"> sr </span>
                <span class="sidebar-normal"> show Resturant  </span>
              </a>
            </li>


          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples4">
          <i class="material-icons">face</i>
          <p> Pharmacy
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="pagesExamples4">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link" href="/users/pharmacy/create">
                <span class="sidebar-mini"> ap </span>
                <span class="sidebar-normal"> add Pharmacy </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/pharmacy">
                <span class="sidebar-mini"> alp </span>
                <span class="sidebar-normal">all Pharmacies  </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/users/pharmacy/show">
                <span class="sidebar-mini"> sp </span>
                <span class="sidebar-normal"> show Pharmacy  </span>
              </a>
            </li>


          </ul>
        </div>
      </li>
    </div>
    </ul>
  </div>
</div>
