<?php include "header.php"; ?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center ">Prime Number</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mt-2">
                                <label for="" class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" cols="30" rows="5"><?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="prime_btn" class="btn btn-success" value="Submit"/>
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

