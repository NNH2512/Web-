
<?php
    include_once 'header.php'; ?>

                <div class="main-container">
                    <div class="main-wrapper">
                            <?php
                    if(isset($_SESSION['u_id'])) {
                        echo "<h1 style='text-align: center;'>Welcome to your minibank</h1> \n";

                        echo '<form action="Data.php" method="POST">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="Data">Click here to go to school data page</button>
                                    </form>';
                    }
                        ?>
                    </div>
                    <img src="image/banking.jpg" class="img-fluid" alt="Responsive image">
                </div>


<?php    include_once 'footer.php'; ?>
