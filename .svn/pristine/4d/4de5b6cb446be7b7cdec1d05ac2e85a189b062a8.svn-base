<?php $url = url()->current();?>
<?php $role = Auth::user()->role;?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="text-align: center;background: gray;">
    <img src="{{ url('public/assets/loyalwagers_logo.png')}}" alt="image">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ url('public/assets/images/login_crown.png')}}" alt="image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><h6> Welcome {{Auth::user()->name}}</h6></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('admin\dashboard')}}" <?php if (preg_match("/dashboard/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
<a href="{{ route('users')}}" <?php if (preg_match("/users/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
              <i class="nav-icon fas fa-th"></i>
              <p> Users </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('livewager')}}" <?php if (preg_match("/livewager/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
            <i class="nav-icon fas fa-copy"></i>
              <p> On Going Wagers </p>
            </a>
            </li>

            <li class="nav-item">
            <a href="{{ route('disputed')}}" <?php if (preg_match("/disputed/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
            <i class="nav-icon far fa-circle text-warning"></i>
              <p> Disputed Wagers </p>
            </a>
            </li>

            <li class="nav-item">
            <a href="{{ route('completedwager')}}" <?php if (preg_match("/completedwager/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
            <i class="nav-icon fas fa-edit"></i>
              <p> Completed Wagers </p>
            </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('terminated')}}" <?php if (preg_match("/terminated/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p> Terminate Games </p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('transferamount')}}" <?php if (preg_match("/transferamount/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
            <i class="nav-icon fas fa-edit"></i>
              <p> Transfer Amount </p>
            </a>
            </li>



         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">

          <li class="nav-item">
            <a href="{{ route('amount')}}" <?php if (preg_match("/amount/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
              <i class="nav-icon fas fa-th"></i>
              <p> Amount </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('platform')}}" <?php if (preg_match("/platform/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
              <i class="nav-icon fas fa-th"></i>
              <p> Platform </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('server')}}" <?php if (preg_match("/server/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
              <i class="nav-icon fas fa-th"></i>
              <p> Server </p>
            </a>
          </li>
            </ul>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Content Creators
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ route('codecreators')}}" <?php if (preg_match("/codecreators/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
                  <i class="nav-icon fas fa-th"></i>
                  <p> Code Creates </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contentcreators')}}" <?php if (preg_match("/contentcreators/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
                  <i class="nav-icon fas fa-th"></i>
                  <p> Assign Content Creator </p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="{{ url('admin\paypalsettings')}}" <?php if (preg_match("/paypalsettings/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Paypal Setting
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        <!--   <li class="nav-item">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p> Paypal Setting </p>
            </a>
            </li> -->

            <li class="nav-item">
            <a href="{{ url('admin/logout')}}" <?php if (preg_match("/logout/i", $url)) {?>class="nav-link active"<?php } else {?>class="nav-link"<?php }?>>
            <i class="nav-icon far fa-circle text-danger"></i>
              <p> Log out </p>
            </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>