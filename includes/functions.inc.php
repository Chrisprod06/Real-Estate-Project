<?php
session_start();
//Functions used in login.inc.php
//Function to login user
function loginUser($conn, $email, $password)
{

    $userIDExists = emailExists($conn, $email);
    if ($userIDExists === false) {
        $_SESSION['lastVisitedPage'] .= '?error=wrongLogin&modal=login';
        header('location: ' . $_SESSION['lastVisitedPage']);
        echo "<script>
        $(window).load(function(){
            $('#login').modal('show');
        });
   </script>";
        exit();
    }

    $passwordHashed = $userIDExists['password'];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        $_SESSION['lastVisitedPage'] .= '?error=wrongPassword&modal=login';
        header('location: ' . $_SESSION['lastVisitedPage']);

        exit();
    } else if ($checkPassword === true) {
        $_SESSION['userID'] = $userIDExists['userID'];
        $_SESSION['firstname'] = $userIDExists['firstname'];
        $_SESSION['lastname'] = $userIDExists['lastname'];
        $_SESSION['telephone'] = $userIDExists['phoneNo'];
        $_SESSION['email'] = $userIDExists['email'];
        $_SESSION['role'] = $userIDExists['role'];
        $_SESSION['lastVisitedPage'] .= '?error=noneLogin';
        header('location: ' . $_SESSION['lastVisitedPage']);
       
        exit();

        //}
    }
}

//Function to check if user exists in database
function emailExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['lastVisitedPage'] .= '?error=stmtFailed';
        header('location: ' . $_SESSION['lastVisitedPage']);
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

//Functions used in contactUs.inc.php
//Function to send email to company
function sendEmail($userID, $firstname, $lastname, $telephone, $emailFrom, $subject, $message)
{

    //Prepare and send email
    //change emails to correct
    $emailTo = 'chrisprodromou06@gmail.com';
    $headers = 'From: ' . $emailFrom;
    $emailText = 'You have received a new message from' . ' Name:' . $firstname . " " . $lastname . '.\n\n' . $message;

    if (mail($emailTo, $subject, $emailText, $headers)) {
        header('Location: ../contact.php?mail=send');
        exit();
    } else {
        header('Location: ../contact.php?message=notSend');
    }
}

function sendEmailInterest($userID, $firstname, $lastname, $telephone, $emailFrom, $message)
{

    //Prepare and send email
    //change emails to correct
    $emailTo = 'chrisprodromou06@gmail.com';
    $headers = 'From: ' . $emailFrom;
    $emailText = 'You have received a new message from' . ' Name:' . $firstname . " " . $lastname . '.\n\n' . $message;

    if (mail($emailTo, $emailText, $headers)) {
        header('Location: ../propertySingle.php?mail=send');
        exit();
    } else {
        header('Location: ../propertySingle.php?message=notSend');
    }
}

//Function to insert inquiry data in database
function addContactUsInquiry($conn, $userID, $subject, $message)
{

    $sql = 'INSERT INTO contactwaitlist(userID,subject,message) VALUES (?,?,?); ';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../contact.php?error=stmtFailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "iss", $userID, $subject, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('Location: ../contact.php?error=none');
    exit();
}
