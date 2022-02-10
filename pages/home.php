<?php include 'header.php'; ?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">Check Prime Number</div>
                        <div class="card-body">

                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Enter Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="given_number" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" name="" value="<?php echo  isset($result) ? $result : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Submit" />
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include 'footer.php'; ?>
