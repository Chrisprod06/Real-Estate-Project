<?php
session_start();

if (isset($_POST['submitSearch'])) {
    //Get variables
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Prepare query
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
        $query[] = "type='$type'";
    }
    if (!empty($_POST['category'])) {
        $category = $_POST['category'];
        $query[] = "category='$category'";
    }
    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
        $query[] = "town='$city'";
    }
    if (!empty($_POST['region'])) {
        $region = $_POST['region'];
        $query[] = "area='$region'";
    }
    if (!empty($_POST['squarem'])) {
        $sqm = $_POST['squarem'];
        if ($sqm === 'sqm50_100') {
            $query[] = "squarem BETWEEN 50 AND 100";
        } else if ($sqm === 'sqm100_150') {
            $query[] = "squarem BETWEEN 100 AND 150";
        } else if ($sqm === 'sqm150_200') {
            $query[] = "squarem BETWEEN 150 AND 200";
        } else if ($sqm === 'sqm200_300') {
            $query[] = "squarem BETWEEN 100 AND 150";
        } else if ($sqm === 'sqm300+') {
            $query[] = "squarem>300";
        }
    }
    if (!empty($_POST['bedrooms'])) {
        $bedrooms = $_POST['bedrooms'];
        $query[] = "bedrooms=$bedrooms";
    }
    if (!empty($_POST['bathrooms'])) {
        $bathrooms = $_POST['bathrooms'];
        $query[] = "bathrooms=$bathrooms";
    }
    if (!empty($_POST['parking'])) {
        $parking = $_POST['parking'];
        if ($parking == 'yes') {
            $query[] = "parking=1";
        } else if ($parking = 'no') {
            $query[] = "parking=0";
        }
    }
    if (!empty($_POST['heating'])) {
        $heating = $_POST['heating'];
        if ($heating == 'yes') {
            $query[] = "heating=1";
        } else if ($heating = 'no') {
            $query[] = "heating=0";
        }
    }
    if (!empty($_POST['furniture'])) {
        $furniture = $_POST['furniture'];
        if ($furniture == 'yes') {
            $query[] = "furniture=1";
        } else if ($furniture = 'no') {
            $query[] = "furniture=0";
        }
    }

    if (!empty($_POST['maxYear'])) {
        $maxYear = $_POST['maxYear'];
        if ($maxYear === 'twoYears') {
            $query[] = "dateOfBuild<= DATE_SUB(CURDATE(),INTERVAL 2 YEAR)";
        } else if ($maxYear === 'fiveYears') {
            $query[] = "dateOfBuild<= DATE_SUB(CURDATE(),INTERVAL 5 YEAR)";
        } else if ($maxYear === 'sevenYears') {
            $query[] = "dateOfBuild<= DATE_SUB(CURDATE(),INTERVAL 7 YEAR)";
        } else if ($maxYear === 'tenYears') {
            $query[] = "dateOfBuild<= DATE_SUB(CURDATE(),INTERVAL 10 YEAR)";
        }
    }
    if (!empty($_POST['maxRent'])) {
        $maxRent = $_POST['maxRent'];
        if ($maxRent === '300eu') {
            $query[] = "rentPrice<=300";
        } else if ($maxRent === '400eu') {
            $query[] = "rentPrice<=400";
        } else if ($maxRent === '500eu') {
            $query[] = "rentPrice<=400";
        } else if ($maxRent === '700eu') {
            $query[] = "rentPrice<=700";
        } else if ($maxRent === '1000eu') {
            $query[] = "rentPrice<=1000";
        }
    }
    if (!empty($_POST['maxPrice'])) {
        $maxPrice = $_POST['maxPrice'];
        if ($maxPrice === '100k') {
            $query[] = "totalPrice<=100000";
        } else if ($maxPrice === '150k') {
            $query[] = "totalPrice<=150000";
        } else if ($maxPrice === '200k') {
            $query[] = "totalPrice<=200000";
        }
    }
    if (!empty($query)) {
        $where = "WHERE";
    } else {
        $where = "";
    }

    //Get data and load them into an array
    $searchquery = implode(' AND ', $query);
    $getsearch = "SELECT * FROM properties $where $searchquery";
    $ressearch = mysqli_query($conn, $getsearch);
    if (mysqli_num_rows($ressearch) === 0) {
        echo 'Nothing Found';
    } else {
        $searchProperties = array();
        while ($r = $ressearch->fetch_assoc()) {
            $searchProperties[] = array(
                'city' => $row['town'],
                'addr' => $row['address'],
                'categ' => $row['category'],
                'totPrice' => $row['totalPrice'],
                'renPrice' => $row['rentPrice'],
                'area' => $row['squarem'],
                'baths' => $row['bathrooms'],
                'beds' => $row['bedrooms'],
                'furnished' => $row['furniture']
            );
        }
        $_SESSION['properties'] = $searchProperties;
        header('Location: ../searchProperties.php');
    }
} else {
    header("Location: ../index.php");
    exit();
}
