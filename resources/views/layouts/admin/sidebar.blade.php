sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ route('admin.dashboard') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ route('admin.add') }}">Add New Administrator</a></li>
              <li><a class="" href="{{ route('lawyer.add') }}">Add New Lawyer</a></li>
              <li><a class="" href="{{ route('insurer.add') }}">Add New Insurer</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ route('admins.list') }}">Show Administrators</a></li>
              <li><a class="" href="{{ route('insurers.list') }}">Show Insurers</a></li>
              <li><a class="" href="{{ route('lawyers.list') }}">Show Lawyers</a></li>
              <li><a class="" href="{{ route('users.list') }}">Show User</a></li>
              <li><a class="" href="{{ route('type.show') }}">Type of Lawyers</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Miscellanous</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ route('type.index') }}">Add Type of Lawyer</a></li>
              <li><a class="" href="{{ route('reference') }}">Reference Codes</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end