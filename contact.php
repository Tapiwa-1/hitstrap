<?php include("layout/navbar.php"); ?>
<div class="container contact banner">
    <div class="row ">
        <h1 class="my-md-5 py-5 text-center">Get in touch With us</h1>
    </div>
</div>
<div class="container">
    <div class="row my-2">
        <div class="col-md-5">
            <h3>Talk to us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nam impedit eius at quia a quidem quae eum ab repudiandae dolores non aspernatur
                laudantium obcaecati eaque, magni nobis suscipit inventore iure!
            </p>
            <h3>Your concerns</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nam impedit eius at quia a quidem quae eum ab repudiandae dolores non aspernatur
                laudantium obcaecati eaque, magni nobis suscipit inventore iure!
            </p>
        </div>
        <div class="col">
            <form action="">
                <div class="row justify-content-center align-items-center my-4">
                    <div>
                        <div class="form-control">
                            <!-- Validate Input -->
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
                                require('process-contactus.php');
                            } // End of the main Submit conditional.
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="" class="form-control text-area" rows="4" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['message'], ENT_QUOTES); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-color my-2 w-100" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php include("layout/footer.php"); ?>