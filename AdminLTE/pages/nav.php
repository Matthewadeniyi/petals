<script>
  <?php if(isset($report)){
    echo $pro->Alert();
  }
  ?>
</script>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">SchoolPetal International School</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

<!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/schoolpetal.jpg" alt="School Petal Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text fw-bold">school Petal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php" class="d-block">SchoolPetal</a>
        </div>
      </div>

      <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link">
              <i class="fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
            <i class="fa fa-graduation-cap"></i>
              <p>
                Manage Students
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="../pages/register-guardian.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Guardians</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/register-student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/all-students.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user-plus"> </i>
              <p>
                Staff Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="add-staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Staffs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
              <p>
                Class Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  
            <li class="nav-item">
                <a href="category-arm.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category/Arm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create-class.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Classes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-subscript"></i>
              <p>
              Subjects info
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
             
              
              <li class="nav-item">
                <a href="add-subject.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create/View Subjects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="subject-teachers.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subject Teachers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-subscript"></i>
              <p>
                Result Mgm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="check-result.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students Results </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class-result.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Results</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-toolbox"></i>
              <p>
                School Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="result-settings.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="permission.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>permission Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="general-setup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="subscriptions.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration Slots</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="manage-promotions.php" class="nav-link">
            <i class="fas fa-scroll"></i>
              <p>
                Manage Promotions
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-money-bill-wave-alt"> </i>
              <p>
                School Fees Control
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="school-fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Free Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="set-school-fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Set School Fee</p>
                </a>
              </li>
  
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-sticky-note" aria-hidden="true"></i>
              <p>
                Levy Payment Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="daily-fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="weekly-fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Weekly Payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="termly-fee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Termly Payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Across Date Range</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fa fa-book" aria-hidden="true"> </i>
              <p>
                Student Result
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                  Upload Result
                    
                  </p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="broad-sheet.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                  View Broad Sheet
                    
                  </p>
                </a>
                
              </li>
  
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                My profile
              </p>
            </a>
        
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-power-off" aria-hidden="true"></i>
              <p>
                Log Out
              </p>
            </a>
        
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  