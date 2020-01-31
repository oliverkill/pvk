<?php require_once APPROOT.'/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-outline-secondary mt-5">
                <div class="card-header">
                    <h3 class="mb-0">Sign Up</h3>
                    <p class="mt-2">Please fill the fields below to register</p>
                </div>
                <div class="card-body">
                    <form class="form" role="form" action="<?php echo URLROOT.'/users/register'?>" method="post">
                        <div class="form-group">
                            <label for="name">Name<sup>*</sup></label>
                            <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id="name" placeholder="Full name" name="name">
                            <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<sup>*</sup></label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password<sup>*</sup></label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Verify password<sup>*</sup></label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>