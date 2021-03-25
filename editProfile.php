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
                                <div class="e-profile">
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="form" novalidate="" action = "includes/editProfile.inc.php" method = "POST">
                                                <?php
                                                include_once 'includes/dbh.inc.php';
                                                $sql = 'SELECT * FROM users WHERE userID = ' . $_SESSION['userID'] . ';';
                                                $result = mysqli_query($conn, $sql);
                                                $resultCheck = mysqli_num_rows($result);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '                                   <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Firstname</label>
                                                                    <input class="form-control" type="text" name="firstname"value="'.$row['firstname'].'">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Lastname</label>
                                                                    <input class="form-control" type="text" name="lastname"  value="'.$row['lastname'].'">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input class="form-control" type="email" name="email" value="'.$row['email'].'">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Telephone</label>
                                                                    <input class="form-control" type="text" name="telephone" value="'.$row['phoneNo'].'">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3">
                                                        <div class="mb-2"><b>Change Password</b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Current Password</label>
                                                                    <input class="form-control" type="password" name = "currentPassword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>New Password</label>
                                                                    <input class="form-control" type="password" name = "newPassword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                    <input class="form-control" type="password" name = "repeatNewPassword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                                        <div class="mb-2"><b>Keeping in Touch</b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label>Email Notifications</label>
                                                                <div class="custom-controls-stacked px-2">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                                                        <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button class="btn btn-a" type="submit">Save Changes</button>
                                                    </div>
                                                </div>';
                                                }
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
    </div>

</section>






<?php

include_once 'includes/footer.inc.php';
?>