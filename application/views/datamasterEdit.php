<!doctype html>
<html lang="en">


  <body>    
<main class="col-md-10 ms-sm-auto col-lg-12 px-md-4">
      <label for="" class="m-1 mt-4">
        <h3>Data Master</h3>
      </label>
      <div class="col-md-12">
        <div class="card ">

          <!-- start search    -->
          <form action="<?php echo base_url(). 'Dashboard/updateMaster';?>" method="post">
          <div class="card-body">
          <?php 
          foreach($editIndex as $eI) {
          ?>
            <div class="row g-auto">
              <div class="col-auto">
              <label class="col-form-label">ID Card :</label>
              </div>
              <div class="col px-md-1">
                <input value="<?php echo $eI->ID_CARD ?>" name="ID_CARD" type="text" class="form-control" placeholder="ID Card" maxlength="30" required>
              </div>
              <div class="col-auto">
              <label class="col-form-label">Name :</label>
              </div>
              <div class="col px-md-1">
                <input value="<?php echo $eI->NAME ?>" name="NAME" type="text" class="form-control" placeholder="Name" style="text-transform:uppercase" maxlength="30" required>
              </div>
              <div class="col-auto">
              <label class="col-form-label">Address :</label>
              </div>
              <div class="col px-md-1">
                <input value="<?php echo $eI->ADDRESS ?>" name="ADDRESS" type="text" class="form-control" placeholder="Address" style="text-transform:uppercase" maxlength="50" required>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo base_url(). 'Dashboard/index'?>" class="btn btn-danger" role="button" aria-pressed="true"> Cancel </a>
              </div>
            </div>
          <?php } ?>
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
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $NO = 1;
                  $idDelete = 'deleteCardID';
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
                      <form class="<?php echo $idDelete ?>" action="<?php echo base_url(). 'Dashboard/deleteMaster/'.$gM->ID_CARD?>" method="post">
                        <div class="col-auto ">
                          <button type="submit" class="btn btn-danger delete">DELETE</button>
                        </div>
                      </form>
                      </td>
                      <td>
                      <form action="<?php echo base_url(). 'Dashboard/editIndex/'.$gM->ID_CARD?>" method="post">
                        <div class="col-auto">
                          <button type="submit" class="btn btn-success"> &nbsp; EDIT &nbsp; </button>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
    <script src="<?= base_url();?>assets/js/sweetalert2.all.min.js"></script> 


    <?php if ($_SESSION["insertSuccess"] === 'start') {?>
        <script>
            Swal.fire(  'Success',  'Data has been insert',  'success')
        </script>
    <?php } $getSes = $_SESSION["insertSuccess"] = "stop";?>

    <?php if ($_SESSION["deleteSuccess"] === 'start') {?>
        <script>
            Swal.fire(  'Success',  'Data has been delete',  'success')
        </script>
    <?php } $getSes = $_SESSION["deleteSuccess"] = "stop";?>

    <?php if ($_SESSION["updateSuccess"] === 'start') {?>
        <script>
            Swal.fire(  'Success',  'Data has been update',  'success')
        </script>
    <?php } $getSes = $_SESSION["updateSuccess"] = "stop";?>

    <?php if ($_SESSION["ValCardID"] === 'start') {?>
        <script>
            Swal.fire(  'Warning',  'Data already exists',  'warning')
        </script>
    <?php } $getSes = $_SESSION["ValCardID"] = "stop";?>

    <?php if ($_SESSION["ValScan"] === 'start') {?>
        <script>
            Swal.fire(  'Warning',  'Not allowed default data',  'warning')
        </script>
    <?php } $getSes = $_SESSION["ValScan"] = "stop";?>

    <?php if ($_SESSION["scanFailed"] === 'start') {?>
        <script>
            Swal.fire(  'Error',  'You have no data to scan',  'error')
        </script>
    <?php } $getSes = $_SESSION["scanFailed"] = "stop";?>

    <?php if ($_SESSION["noData"] === 'start') {?>
        <script>
            Swal.fire(  'Warning',  'Data not found',  'warning')
        </script>
    <?php } $getSes = $_SESSION["noData"] = "stop";?>



    <script>

    $('.deleteCardID').on('click', function(e) {

        e.preventDefault();
        console.log('Ini Jquery');
        const action = $(this).attr('action');
        console.log(action);
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = action;
        }
        })

    });

    // const tombol = document.querySelector('.deleteCardID');
    // tombol.addEventListener('click', function(e){
        
    //     e.preventDefault();
    //     console.log('test click data');
    //     console.log(tombol);
    //     // const href = $(this).attr('method');
    //     // // var link_name = $(this).attr('action1');
    //     // console.log(href);

    //     // Swal.fire({
    //     //     title: 'Are you sure?',
    //     //     text: "You won't be able to revert this!",
    //     //     icon: 'warning',
    //     //     showCancelButton: true,
    //     //     confirmButtonColor: '#3085d6',
    //     //     cancelButtonColor: '#d33',
    //     //     confirmButtonText: 'Yes, delete it!'
    //     // }).then((result) => {
    //     // if (result.isConfirmed) {
    //     //     Swal.fire(
    //     //     'Deleted!',
    //     //     'Your file has been deleted.',
    //     //     'success'
    //     //     console.log('success dah')
    //     //     // document.location.href = href ;
    //     //     )
    //     // }
    //     // })


    // });

    </script>

  </body>
</html>
