<?php
session_start();
include_once('database.php');
$db = new database();
if (isset($_POST['submit'])) {
    // --------data already exist ----------

    $date = $db->escapeString($_POST['date']);
    $result = $db->dataExists('haccp_02', "date = '$date'" ,  "HACCP_02_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../Haccp-02_add');
        exit;
    } else {
    }
    $params = [
        'date' => $db->escapeString($_POST['date']),
        'time' => $db->escapeString($_POST['time']),
        'product_name' => $db->escapeString($_POST['product_name']),
        'internal_temp_chicken_40F' => $db->escapeString($_POST['internal_temp_chicken_40F']),
        'initials' => $db->escapeString($_POST['initials']),
        'pre_shipper_signature' => $db->escapeString($_POST['pre_shipper_signature']),
        'verification_date' => $db->escapeString($_POST['verification_date']),
        'verified_initials' => $db->escapeString($_POST['verified_initials']),
        'verified_date' => $db->escapeString($_POST['verified_date']),
        'verified_time' => $db->escapeString($_POST['verified_time']),
        'verified_method' => $db->escapeString($_POST['verified_method']),
        'results' => $db->escapeString($_POST['results'])
    ];
    if ($db->insert('haccp_02', $params)) {
        // ---------------------------
        $_SESSION['message'] = 'Data inserted successfully';
        header('Location: ../Haccp-02_add');
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
    $result = $db->dataExists('haccp_02', "date = '$date'" ,  "HACCP_02_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../Haccp-02_edit.php?id='.$id);
        exit;
    } else {
    }


    $params = [
        'date' => $db->escapeString($_POST['date']),
        'time' => $db->escapeString($_POST['time']),
        'product_name' => $db->escapeString($_POST['product_name']),
        'internal_temp_chicken_40F' => $db->escapeString($_POST['internal_temp_chicken_40F']),
        'initials' => $db->escapeString($_POST['initials']),
        'pre_shipper_signature' => $db->escapeString($_POST['pre_shipper_signature']),
        'verification_date' => $db->escapeString($_POST['verification_date']),
        'verified_initials' => $db->escapeString($_POST['verified_initials']),
        'verified_date' => $db->escapeString($_POST['verified_date']),
        'verified_time' => $db->escapeString($_POST['verified_time']),
        'verified_method' => $db->escapeString($_POST['verified_method']),
        'results' => $db->escapeString($_POST['results'])
    ];

    if ($db->Update('haccp_02', $params , "HACCP_02_id = $id")) {
        // ---------------------------
        $_SESSION['message'] = 'Data Update successfully';
        header('Location: ../Haccp-02');
        exit;
    } else {
        $_SESSION['message'] = 'Error inserting data';
    }
}

// --------------------delete--------------------
if (isset($_GET['Delete_id'])) {
    $id = $db->escapeString($_GET['Delete_id']);
    if ($db->delete('haccp_02', "HACCP_02_id = $id")) {
        $_SESSION['delete'] = 'Data deleted successfully';
        header('Location: ../Haccp-02');
        exit;
    } else {
        $_SESSION['delete'] = 'Error deleting data';
    }
}


