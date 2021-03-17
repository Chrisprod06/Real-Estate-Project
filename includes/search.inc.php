<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get variables
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Prepare query
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
        if ($type !== 'allTypes') {
            $query[] = "type='$type'";
        }
    }
    if (!empty($_POST['category'])) {
        $category = $_POST['category'];
        if ($category !== 'allCategories') {
            $query[] = "category='$category'";
        }
    }
    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
        if ($city !== 'allCities') {
            $query[] = "town='$city'";
        }
    }
    if (!empty($_POST['region'])) {
        $region = $_POST['region'];
        if ($region !== 'allRegions') {
            $query[] = "area='$region'";
        }
    }
    if (!empty($_POST['bedrooms'])) {
        $bedrooms = $_POST['bedrooms'];
        if ($bedrooms !== 'any') {
            $query[] = "bedrooms=$bedrooms";
        }
    }
    if (!empty($_POST['bathrooms'])) {
        $bathrooms = $_POST['bathrooms'];
        if ($bathrooms !== 'any') {
            $query[] = "bathrooms=$bathrooms";
        }
    }
    if (isset($_POST['parking'])) {
        $parking = $_POST['parking'];
            if ($parking == 'parking') {
                $query[] = "parking=1";
            } else{
                $query[] = "parking=0";
            }
        
    }
    if (isset($_POST['heating'])) {
        $heating = $_POST['heating'];
        
            if ($heating == 'heating') {
                $query[] = "heating=1";
            } else   {
                $query[] = "heating=0";
            }
        
    }
    if (isset($_POST['furniture'])) {
        $furniture = $_POST['furniture'];
       
            if ($furniture == 'furniture') {
                $query[] = "furniture=1";
            } else {
                $query[] = "furniture=0";
            }
        
    }

    if (!empty($_POST['rangePrice'])) {
        $priceRange = $_POST['rangePrice'];
        list($minString,$maxString) = explode(';',$priceRange);
        $min = (int)$minString;
        $max = (int)$maxString;

        $query[] = "totalPrice BETWEEN ".$min." AND ".$max;
        
    }
    if (!empty($query)) {
        $where = "WHERE";
        $searchquery = implode(' AND ', $query);
    } else {
        $where = "";
        $searchquery = "";
    }

    //Get data and load them into an array
    
    $getsearch = "SELECT * FROM properties $where $searchquery;";
    $ressearch = mysqli_query($conn, $getsearch);
    if (mysqli_num_rows($ressearch) === 0) {
        header("Location: ../searchProperties.php?properties=none");
    } else {
       
        $searchProperties = array();
        while ($row = mysqli_fetch_assoc($ressearch)) {
            $searchProperties[] = array(
                'city' => $row['town'],
                'addr' => $row['address'],
                'categ' => $row['category'],
                'totPrice' => $row['totalPrice'],
                'area' => $row['squarem'],
                'baths' => $row['bathrooms'],
                'beds' => $row['bedrooms'],
                'furnished' => $row['furniture']
                
            );
            
        }
        
        $_SESSION['properties'] = $searchProperties;
        header('Location: ../searchProperties.php');
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
