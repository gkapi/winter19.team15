﻿<?php

    include 'initSesh.php';
    
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.6.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->

    
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Trigger the Modal -->
        <img id="myImg" src="images/QR.png" alt="Scan with your phone to sign-in." style="width:100%;max-width:50px"> <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span class="close">&times;</span> <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01"> <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
        <script src="js/QR.js"></script>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="main.php"> Home <span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link" href="announcements-client.html">Announcements</a></li>
            <li class="nav-item active"><a class="nav-link" href="memberships.php">Memberships</a></li>
            <li class="nav-item active"><a class="nav-link" href="pastPrograms.php">Past Programs</a></li>
            <li class="nav-item active"><a class="nav-link" href="clientNutrition.php">Nutritional Calculator</a></li>
            <li class="nav-item active"><a class="nav-link" href="enroll.php">Enrollment</a></li>
            <li class="nav-item active"><a class="nav-link" href="support.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="http://cproject.in.cs.ucy.ac.cy/ironsky/winter19.team15/php/logout.php" tabindex="-1">Logout</a></li>
        </ul>
       
    </nav>
    <!-- The Modal -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Your subscription was canceled</h4><button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div><!-- Modal Body -->
                <div class="modal-body">
                    Access will be denied with the expiration of your current subscription.
                </div><!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>