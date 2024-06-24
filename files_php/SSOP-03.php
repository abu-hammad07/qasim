<?php
session_start();
include_once('database.php');
$db = new database();
if (isset($_POST['submit'])) {
    // --------data already exist ----------

    $date = $db->escapeString($_POST['date']);
    $result = $db->dataExists('ssop_03', "date = '$date'" ,  "SSOP_03_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../SSOP-03_add');
        exit;
    } else {
    }
    $params = [
        'date' => $db->escapeString($_POST['date']),
        'ssop_form_number' => $db->escapeString($_POST['ssop_form_number']),
        'area_number' => $db->escapeString($_POST['area_number']),
        'deficiencies' => $db->escapeString($_POST['deficiencies']),
        'corrective_actions' => $db->escapeString($_POST['corrective_actions']),
        'preventive_actions' => $db->escapeString($_POST['preventive_actions']),
        'time_completed' => $db->escapeString($_POST['time_completed']),
        'initial' => $db->escapeString($_POST['initial'])
    ];
    if ($db->insert('ssop_03', $params)) {
        // ---------------------------
        $_SESSION['message'] = 'Data inserted successfully';
        header('Location: ../SSOP-03_add');
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
    $result = $db->dataExists('ssop_03', "date = '$date'" ,  "SSOP_03_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../ssop-03_edit.php?id='.$id);
        exit;
    } else {
    }


    $params = [
        'date' => $db->escapeString($_POST['date']),
        'ssop_form_number' => $db->escapeString($_POST['ssop_form_number']),
        'area_number' => $db->escapeString($_POST['area_number']),
        'deficiencies' => $db->escapeString($_POST['deficiencies']),
        'corrective_actions' => $db->escapeString($_POST['corrective_actions']),
        'preventive_actions' => $db->escapeString($_POST['preventive_actions']),
        'time_completed' => $db->escapeString($_POST['time_completed']),
        'initial' => $db->escapeString($_POST['initial'])
    ];

    if ($db->Update('ssop_03', $params , "SSOP_03_id = $id")) {
        // ---------------------------
        $_SESSION['message'] = 'Data Update successfully';
        header('Location: ../SSOP-03');
        exit;
    } else {
        $_SESSION['message'] = 'Error inserting data';
    }
}

// --------------------delete--------------------
if (isset($_GET['Delete_id'])) {
    $id = $db->escapeString($_GET['Delete_id']);
    if ($db->delete('ssop_03', "SSOP_03_id = $id")) {
        $_SESSION['delete'] = 'Data deleted successfully';
        header('Location: ../SSOP-03');
        exit;
    } else {
        $_SESSION['delete'] = 'Error deleting data';
    }
}


