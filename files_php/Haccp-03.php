<?php
session_start();
include_once('database.php');
$db = new database();
if (isset($_POST['submit'])) {
    // --------data already exist ----------
    $date = $db->escapeString($_POST['load_date']);
    $result = $db->dataExists('haccp_03', "load_date = '$date'" ,  "HACCP_03_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../Haccp-03_add');
        exit;
    } else {
    }
    $params = [
        'load_date' => $db->escapeString($_POST['load_date']),
        'catching_crew' => $db->escapeString($_POST['catching_crew']),
        'grower' => $db->escapeString($_POST['grower']),
        'house' => $db->escapeString($_POST['house']),
        'pen' => $db->escapeString($_POST['pen']),
        'bird_type' => $db->escapeString($_POST['bird_type']),
        'coops_head' => $db->escapeString($_POST['coops_head']),
        'total_birds' => $db->escapeString($_POST['total_birds']),
        'time_of_arrival' => $db->escapeString($_POST['time_of_arrival']),
        'sexing' => $db->escapeString($_POST['sexing']),
        'driver' => $db->escapeString($_POST['driver']),
        'comments' => $db->escapeString($_POST['comments'])
    ];
    if ($db->insert('haccp_03', $params)) {
        // ---------------------------
        $_SESSION['message'] = 'Data inserted successfully';
        header('Location: ../Haccp-03_add');
        exit;
    } else {
        $_SESSION['message'] = 'Error inserting data';
    }
}
// <!-- -------------update all data------------- -->
if (isset($_POST['Update'])) {
    // --------data already exist ----------

    $id = $db->escapeString($_POST['id']);
    
    $date = $db->escapeString($_POST['date']);
    $result = $db->dataExists('haccp_03', "load_date = '$date'" ,  "HACCP_03_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../Haccp-03_edit.php?id='.$id);
        exit;
    } else {
    }


    $params = [
        'load_date' => $db->escapeString($_POST['load_date']),
        'catching_crew' => $db->escapeString($_POST['catching_crew']),
        'grower' => $db->escapeString($_POST['grower']),
        'house' => $db->escapeString($_POST['house']),
        'pen' => $db->escapeString($_POST['pen']),
        'bird_type' => $db->escapeString($_POST['bird_type']),
        'coops_head' => $db->escapeString($_POST['coops_head']),
        'total_birds' => $db->escapeString($_POST['total_birds']),
        'time_of_arrival' => $db->escapeString($_POST['time_of_arrival']),
        'sexing' => $db->escapeString($_POST['sexing']),
        'driver' => $db->escapeString($_POST['driver']),
        'comments' => $db->escapeString($_POST['comments'])
    ];

    if ($db->Update('haccp_03', $params , "HACCP_03_id = $id")) {
        // ---------------------------
        $_SESSION['message'] = 'Data Update successfully';
        header('Location: ../HACCP-03');
        exit;
    } else {
        $_SESSION['message'] = 'Error inserting data';
    }
}

// --------------------delete--------------------
if (isset($_GET['Delete_id'])) {
    $id = $db->escapeString($_GET['Delete_id']);
    if ($db->delete('haccp_03', "HACCP_03_id = $id")) {
        $_SESSION['delete'] = 'Data deleted successfully';
        header('Location: ../HACCP-03');
        exit;
    } else {
        $_SESSION['delete'] = 'Error deleting data';
    }
}


