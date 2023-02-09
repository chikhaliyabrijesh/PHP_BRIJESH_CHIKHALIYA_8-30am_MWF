<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4 p-3 mx-auto">
            <h2 align="center"><i class="bi bi-person-fill"></i>&nbsp;Edit Employee Form</h2>
            <hr style="background-color: black; height: 5px; width: 50%; margin: auto;">
            <div class="card mt-4">
                <div class="card-header"></div>
                <div class="card-body">
                    <form method="post">
                        <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">First Name :</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" value="<?php echo $editupddata[0]["firstname"];?>" class="form-control">
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Last Name :</label>
                            <div class="col-sm-9">
                              <input type="text" name="lname" value="<?php echo $editupddata[0]["lastname"];?>" class="form-control">
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Gender :</label>
                        <div class="col-sm-9 mt-2">
                            Male&nbsp;<input type="radio" name="gender" value="Male">
                            Female&nbsp;<input type="radio" name="gender" value="Female">
                        </div>
                        </div> -->

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" value="<?php echo $editupddata[0]["email"];?>" class="form-control">
                        </div>
                        </div>

                        <!-- <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Password :</label>
                        <div class="col-sm-9">
                            <input type="text" name="pass" class="form-control">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Confirm Password :</label>
                        <div class="col-sm-9">
                            <input type="text" name="cpass" class="form-control">
                        </div>
                        </div> -->

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Mobile :</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile" value="<?php echo $editupddata[0]["mobile"];?>" class="form-control">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Address :</label>
                        <div class="col-sm-9">
                            <textarea name="address" class="form-control"><?php echo $editupddata[0]["address"];?></textarea>
                        </div>
                        </div>
        
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Update Employee</label>
                        <div class="col-sm-9">
                        <button type="submit" name="updemployee" class="btn btn-primary">Update Employee</button>
                        </div>
                    </div>
        
                    </form><!-- End General Form Elements -->
        
                </div>
            </div>
        </div>
    </div>
</div>
