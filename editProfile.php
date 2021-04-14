<?php
$title = "Edit Profile | APM Smart Houses";
include_once 'includes/header.inc.php';
?>

<section class="intro-single">
    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                            <?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] == 'stmtFailed'){
                                    echo '<p class = "text-danger text-center " >Something went wrong! Please try again.</p>';
                                }
                                if($_GET['error'] == 'somethingWrong'){
                                    echo '<p class = "text-danger text-center " >Something went wrong! Please try again.</p>';
                                }
                                if($_GET['error'] == 'currentPasswordWrong'){
                                    echo '<p class = "text-danger text-center " >Current password Wrong! Please try again.</p>';
                                }
                                if($_GET['error'] == 'passwordsDontMatch'){
                                    echo '<p class = "text-danger text-center " >Passwords must match! Please try again.</p>';
                                }
                            }
                            
                            ?>
                                <div class="e-profile">
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="form" novalidate="" action="includes/editProfile.inc.php" method="POST">
                                                <?php
                                                echo '                                   <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>'.$lang['firstname'].'</label>
                                                                    <input class="form-control" type="text" name="firstname" value="' . $_SESSION['firstname'] . '">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>'.$lang['lastname'].'</label>
                                                                    <input class="form-control" type="text" name="lastname"  value="' . $_SESSION['lastname'] . '">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input class="form-control" type="email" name="email" value="' . $_SESSION['email'] . '">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>'.$lang['phone'].'</label>
                                                                    <input class="form-control" type="text" name="telephone" value="' . $_SESSION['telephone'] . '">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3">
                                                        <div class="mb-2"><b>'.$lang['chpassword'].'</b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>'.$lang['cupassword'].'</label>
                                                                    <input class="form-control" type="password" name = "currentPassword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>'.$lang['npassword'].'</label>
                                                                    <input class="form-control" type="password" name = "newPassword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>'.$lang['confirm'].' <span class="d-none d-xl-inline">'.$lang['password'].'</span></label>
                                                                    <input class="form-control" type="password" name = "repeatNewPassword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button class="btn btn-a" type="submit" name = "submit">'.$lang['savechanges'].'</button>
                                                    </div>
                                                </div>';

                                                ?>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col d-flex justify-content-end">
        <a href="includes/deleteAccount.inc.php"><?php echo $lang['deleteaccount']?></a>
        </div>
        
    </div>

</section>






<?php

include_once 'includes/footer.inc.php';
?>