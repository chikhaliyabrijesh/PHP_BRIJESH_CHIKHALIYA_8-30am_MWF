<main id="main" class="main">

    <div class="pagetitle">
      <h1 align="center" class="mt-4">Manage All Employees</h1>
      <hr style="background-color: black; height: 5px; width: 30%; margin: auto;">
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12 mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Employees</h5>

              <!-- Default Table -->
              <table class="table" id="tab">
                
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Datetime</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <th scope="row"><?php echo $readdata[0]["empid"];?></th>
                    <td><?php echo $readdata[0]["firstname"];?></td>
                    <td><?php echo $readdata[0]["lastname"];?></td>
                    <td><?php echo $readdata[0]["gender"];?></td>
                    <td><?php echo $readdata[0]["email"];?></td>
                    <td><?php echo $readdata[0]["password"];?></td>
                    <td><?php echo $readdata[0]["mobile"];?></td>
                    <td><?php echo $readdata[0]["address"];?></td>
                    <td><?php echo $readdata[0]["datetime"];?></td>
                    <td>
                        <a href="<?php echo "./editdata";?>?editdataid=<?php echo $readdata[0]["empid"];?>"><button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square">&nbsp;Edit</i></button></a> 

                        <a href="<?php echo "./";?>?deleteid=<?php echo $readdata[0]["empid"];?>"<button type="button" class="btn btn-sm btn-danger text-white"><i class="bi bi-trash">&nbsp;Delete</i></button></a>
                    </td>
                  </tr>
                </tbody>

              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<script>
    $(document).ready(function () {
    $('#tab').DataTable();
});
</script>