<?php
    $query = "SELECT * FROM media WHERE serviceID = '$serviceID'";
    $gallery_result = mysqli_query($conn, $query);

    if (!$gallery_result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $query = "SELECT * FROM media_two WHERE serviceID = '$serviceID'";
    $gallery_result = mysqli_query($conn, $query);

    if (!$gallery_result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $query = "SELECT * FROM media_three WHERE serviceID = '$serviceID'";
    $gallery_result = mysqli_query($conn, $query);

    if (!$gallery_result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $query = "SELECT * FROM media_four WHERE serviceID = '$serviceID'";
    $gallery_result = mysqli_query($conn, $query);

    if (!$gallery_result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $query = "SELECT * FROM media_five WHERE serviceID = '$serviceID'";
    $gallery_result = mysqli_query($conn, $query);

    if (!$gallery_result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $query = "SELECT * FROM media_six WHERE serviceID = '$serviceID'";
    $gallery_result = mysqli_query($conn, $query);

    if (!$gallery_result) {
        die("Query failed: " . mysqli_error($conn));
    }