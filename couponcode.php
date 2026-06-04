<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon Code Generator - Biz-Connect</title>
      <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Biz-connect.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="Biz-connect.jpegs">
    <link rel="manifest" href="site.webmanifest">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
        }
        .form-container {
            margin-top: 50px;
            max-width: 500px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>


<?php
// Include the database connection file
include "dbconnect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $websiteName = $_POST['websiteName'];
    $couponLength = $_POST['couponLength'];

    // Generate coupon code
    $prefix = "Biz-Connect";
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $coupon = $prefix;

    // Append random characters and numbers to the prefix
    for ($i = strlen($prefix); $i < $couponLength; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $coupon .= $characters[$randomIndex];
    }

    // Insert coupon into database
    $sql = "INSERT INTO coupons (website_name, coupon_code) VALUES ('$websiteName', '$coupon')";

    if ($conn->query($sql) === TRUE) {
        echo "Coupon inserted successfully: $coupon";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container">
                <h2 class="text-center mb-4 text-dark">Coupon Code Generator</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="websiteName " class="text-dark">Website Name:</label>
                        <input type="text" class="form-control" name="websiteName" id="websiteName" placeholder="Enter website name" required>
                    </div>
                    <div class="form-group">
                        <label for="couponLength " class="text-dark">Coupon Length:</label>
                        <input type="number" class="form-control" name="couponLength" id="couponLength" min="6" max="20" value="10" required>
                        <small class="form-text text-muted">Minimum length: 6, Maximum length: 20</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Generate Coupon</button>
                    </div>
                </form>
                <button class="btn btn-primary">Back </button>
            </div>
           
        </div>
    </div>
</div>

</body>
</html>
