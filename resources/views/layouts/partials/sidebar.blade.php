<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>      
        <li @if( url()->current() == url('/home')) class="active" @endif><a href="{{ url('/home') }}"><i class="fa fa-snowflake-o"></i> <span>Dashboard</span></a></li>
        <li @if( url()->current() == url('/donation-areas')) class="active" @endif><a href="{{ url('/donation-areas') }}"><i class="fa fa-map-marker"></i> <span>Donation Areas</span></a></li>
        <li @if( url()->current() == url('/donations')) class="active" @endif><a href="{{ url('/donations') }}"><i class="fa fa-heart"></i> <span>Donations</span></a></li>
        <li @if( url()->current() == url('/families')) class="active" @endif><a href="{{ url('/families') }}"><i class="fa fa-users"></i> <span>Families</span></a></li>
        <li @if( url()->current() == url('/organisations')) class="active" @endif><a href="{{ url('/organisations') }}"><i class="fa fa-sitemap"></i> <span>Organisations</span></a></li>
        <li @if( url()->current() == url('/users')) class="active" @endif><a href="{{ url('/users') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li @if( url()->current() == url('/volunteers')) class="active" @endif><a href="{{ url('/volunteers') }}"><i class="fa fa-user"></i> <span>Volunteers</span></a></li>
        <li @if( url()->current() == url('/donors')) class="active" @endif><a href="{{ url('/donors') }}"><i class="fa fa-user"></i> <span>Donors</span></a></li>
        <li @if( url()->current() == url('/expenses')) class="active" @endif><a href="{{ url('/expenses') }}"><i class="fa fa-calculator"></i> <span>Expenses</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>