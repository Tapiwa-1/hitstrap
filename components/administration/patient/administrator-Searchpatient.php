<?php include("header.php") ?>
<div class="container">
    <form action="administrator-Searchpatient.php" method="POST">
        <div class="col-md-4 m-auto">
            <h5>FILL IN THE FOLLOWING</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" required placeholder="Practitioner First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" required placeholder="Practitioner Last Name">
                    </div>
                </div>
            </div>
            <input type="submit" value="submit" class="btn btn-color w-100 mt-2">
        </div>
    </form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('process-searchrecords.php');
}
?>
</div>
<?php include("footer.php") ?>