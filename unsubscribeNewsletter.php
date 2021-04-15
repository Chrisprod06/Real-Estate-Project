<?php
$title = "Unsubcribe Newsletter | APM Smart Houses";
include_once 'includes/header.inc.php';
?>
<section class="intro-single">
    <div class="login-form">
        <form action="includes/delnews.inc.php" method="post">
            <h2 class="text-center">Unsubscribe from newsletter</h2>
            <p class="text-center">Press the button below to unsubcribe.</p>
            <div class="form-group">
                <input type="hidden" name="email" class="form-control" value = "<?php echo $_GET['email']?>">
            </div>
            <!--Error messages-->
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'stmtFailed') {
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }
            }

            if (isset($_GET['unsubscribe'])) {
                if ($_GET['unsubscribe'] == 'success') {
                    echo '
                    <script>
                    $(document).ready(function(){
                      Swal.fire({
                        position: "center",
                        icon: "success", 
                        title: "Unsubscribed successfully!",
                        showConfirmButton: false,
                        timer: 1500                 
                      }).then(function() {
                        window.location.href = "index.php";
                      })
                    });                 
                    </script>
                    ';
                } else if ($_GET['request'] == 'fail') {
                    echo '<p class = "text-danger text-center " >Something went wrong. Please try again.</p>';
                }
            }
            ?>

            <div class="form-group">
                <button type="submit" name="submitUnsubscribe" class="btn btn-a">Unsubscribe</button>
            </div>
        </form>

    </div>
</section>

<?php
include_once "includes/footer.inc.php";
?>