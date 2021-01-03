<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><h3>Arduino Dashboard </h3></a> -->
  <!-- <h2> -->
    <p class="text-center">
      <a class="navbar-brand text-center" href="#"><h4>Arduino Dashboard</h4></a>
    </p>

  <!-- </h2> -->
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <!-- <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul> -->
</header>

<!-- <div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>


  </div>
</div> -->
<p class="text-center">Create By TS</p>
<!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> -->
<main class="col-md-10 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h2">Dashboard</h1> -->
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <label for="" class="m-1 mt-4">
        <h3>Data Entry</h3>
      </label>
      <div class="col-md-12">
        <div class="card ">
          <!-- start search    -->
          <div class="card-body">
            <div class="row g-auto">
              <div class="col-auto">
              <label class="col-form-label">ID Card :</label>
              </div>
              <div class="col px-md-1">
                <input type="text" class="form-control" placeholder="ID Card" aria-label="First name">
              </div>
              <div class="col-auto">
              <label class="col-form-label">Name :</label>
              </div>
              <div class="col px-md-1">
                <input type="text" class="form-control" placeholder="Name" aria-label="Last name">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
          <!-- end search  -->

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Card</th>
                      <th>Name</th>
                      <th>Last Entry</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>

            <!-- start search by entry date  -->
          <div class="card-body">
            <div class="row g-auto">

              <div class="col-auto">
                <label class="col-form-label">Last Entry :</label>
              </div>

              <div class="col-auto">
                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
              
              <div class="col-auto">
                <label class="col-form-label">to</label>
              </div>

              <div class="col-auto">
                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>

              <div class="col-auto">
                <button type="button" class="btn btn-outline-secondary">Export</button>
              </div>

            </div>
          </div>
            <!-- end search by entry date  -->

        </div>
      </div>

      <label for="" class="m-1 mt-4">
        <h3>Data Master</h3>
      </label>
      <div class="col-md-12">
        <div class="card ">
          <!-- start search    -->
          <form action="<?php echo base_url(). 'Dashboard/postMaster';?>" method="post">
          <div class="card-body">
            <div class="row g-auto">
              <div class="col-auto">
              <label class="col-form-label">ID Card :</label>
              </div>
              <div class="col px-md-1">
                <input name="ID_CARD" type="text" class="form-control" placeholder="ID Card" required>
              </div>
              <div class="col-auto">
              <label class="col-form-label">Name :</label>
              </div>
              <div class="col px-md-1">
                <input name="NAME" type="text" class="form-control" placeholder="Name" required>
              </div>
              <div class="col-auto">
              <label class="col-form-label">Address :</label>
              </div>
              <div class="col px-md-1">
                <input name="ADDRESS" type="text" class="form-control" placeholder="Address" required>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
          </form>
          <!-- end search  -->

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Card</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Create Date</th>
                      <th>Update Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $NO = 1;
                  foreach($getMaster as $gM) {
                  ?>
                    <tr>
                      <td><?php echo $NO++ ?></td>
                      <td><?php echo $gM->ID_CARD ?></td>
                      <td><?php echo $gM->NAME ?></td>
                      <td><?php echo $gM->ADDRESS ?></td>
                      <td><?php echo $gM->CREATED_DT ?></td>
                      <td><?php echo $gM->UPDATED_DT ?></td>
                      <td>
                      <form action="<?php echo base_url(). 'Dashboard/deleteMaster/'.$gM->ID_CARD?>" method="post">
                        <div class="col-auto">
                          <button type="submit" class="btn btn-danger">DELETE</button>
                        </div>
                      </form>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- start search by entry date  -->
          <div class="card-body">
            <div class="row g-auto">

              <div class="col-auto">
                <label class="col-form-label">Create Date :</label>
              </div>

              <div class="col-auto">
                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
              
              <div class="col-auto">
                <label class="col-form-label">to</label>
              </div>

              <div class="col-auto">
                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>

              <div class="col-auto">
                <button type="button" class="btn btn-outline-secondary">Export</button>
              </div>

            </div>
          </div>
            <!-- end search by entry date  -->

        </div>
      </div>
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
