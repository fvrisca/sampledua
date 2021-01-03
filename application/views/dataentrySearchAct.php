<!doctype html>
<html lang="en">
  <body>
<main class="col-md-10 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
      <label for="" class="m-1 mt-4">
        <h3>Data Entry</h3>
      </label>
      <div class="col-md-12">
        <div class="card ">
          <!-- start search    -->
          <form action="<?php echo base_url(). 'Dashboard/searchData'?>" method="post">
          <div class="card-body">
            <div class="row g-auto">
              <div class="col-auto">
              <label class="col-form-label">ID Card :</label>
              </div>
              <div class="col px-md-1">
                <input name="ID_CARD" type="text" class="form-control" placeholder="ID Card" aria-label="First name">
              </div>
              <div class="col-auto">
              <label class="col-form-label">Name :</label>
              </div>
              <div class="col px-md-1">
                <input name="NAME" type="text" class="form-control" placeholder="Name" aria-label="Last name">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="<?php echo base_url(). 'Dashboard/index'?>" class="btn btn-info" role="button" aria-pressed="true"> Refresh </a>
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
                      <th>Last Entry</th>
                      <th>Create Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                  foreach ($searchbyIDCard as $gbIC) {
                  ?>
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $gbIC->ID_CARD ?></td>
                      <td><?php echo $gbIC->NAME ?></td>
                      <td><?php echo $gbIC->LAST_ENTRY ?></td>
                      <td><?php echo $gbIC->CREATED_DT ?></td>
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
</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
