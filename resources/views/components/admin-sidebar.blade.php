<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand row-span-2">
        <a href="index.html"> <img alt="image" src="https://khabardharan.codeitapps.com/images/1684763771.png" class="header-logo" />
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown">
          <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
            <a href="{{route('company.index')}}" class="nav-link"><i data-feather="award"></i><span>Company</span></a>
          </li>
          <li class="dropdown">
            <a href="{{route('category.index')}}" class="nav-link"><i data-feather="award"></i><span>Category</span></a>
          </li>
        <li class="menu-header">News</li>
        <li class="dropdown">

          <a href="" class="menu-toggle nav-link has-dropdown"><i
              data-feather="edit"></i><span>Post</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('news.create')}}">Create News</a></li>
          </ul>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('news.index')}}">Newstable</a></li>
          </ul>
        </li>
          <li class="menu-header">Advertisement</li>
        <li class="dropdown">

          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="credit-card"></i><span>Advertisement</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('advertise.index')}}">View Ads</a></li>
            <li><a class="nav-link" href="{{route('advertise.create')}}">Create Ads</a></li>

          </ul>
        </li>
        <li class="dropdown">

            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="credit-card"></i><span>Otherpage Ad</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="widget-chart.html">Create Ads</a></li>

            </ul>
          </li>
          <li>
          <a href="{{route('subindex')}}" class=" nav-link"><i
            data-feather="credit-card"></i><span>Subscriber</span></a></li>
      </ul>
    </aside>
  </div>
