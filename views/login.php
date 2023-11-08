<?php include "header.php"; ?>
<section class="py-5  bg-warning-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header  text-center fw-bold"><h1>Login Form</h1></div>
                    <div class="card-body">
                        <p class="text-center text-danger">
                            <?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>
                        </p>
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="userName" class="col-md-3">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="userName" class="form-control" name="user_name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" id="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-primary px-5" name="login_btn" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
