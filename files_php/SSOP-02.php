<?php
session_start();
include_once('database.php');
$db = new database();
if (isset($_POST['submit'])) {
    // --------data already exist ----------

    $date = $db->escapeString($_POST['form_date']);
    $result = $db->dataExists('ssop_02', "form_date = '$date'" ,  "SSOP_02_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../SSOP-02_add');
        exit;
    } else {
    }


    $params = [
        'form_date' => $db->escapeString($_POST['form_date']),
        'no_condensation' => $db->escapeString($_POST['no_condensation']),
        'no_rodent_activity' => $db->escapeString($_POST['no_rodent_activity']),
        'handwash_station' => $db->escapeString($_POST['handwash_station']),
        'employee_hygiene' => $db->escapeString($_POST['employee_hygiene']),
        'cooler1_temp' => $db->escapeString($_POST['cooler1_temp']),
        'cooler2_temp' => $db->escapeString($_POST['cooler2_temp']),
        'freezer_temp' => $db->escapeString($_POST['freezer_temp']),
        'paa_concentration' => $db->escapeString($_POST['paa_concentration']),
        'no_rodent_droppings' => $db->escapeString($_POST['no_rodent_droppings']),
        'rework_chicken_process' => $db->escapeString($_POST['rework_chicken_process']),
        'others' => $db->escapeString($_POST['others'])
    ];
    if ($db->insert('ssop_02', $params)) {
        // ---------------------------
        $_SESSION['message'] = 'Data inserted successfully';
        header('Location: ../SSOP-02_add');
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
    $result = $db->dataExists('ssop_02', "form_date = '$date'" ,  "SSOP_02_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../ssop-02_edit.php?id='.$id);
        exit;
    } else {
    }


    $params = [
        'form_date' => $db->escapeString($_POST['form_date']),
        'no_condensation' => $db->escapeString($_POST['no_condensation']),
        'no_rodent_activity' => $db->escapeString($_POST['no_rodent_activity']),
        'handwash_station' => $db->escapeString($_POST['handwash_station']),
        'employee_hygiene' => $db->escapeString($_POST['employee_hygiene']),
        'cooler1_temp' => $db->escapeString($_POST['cooler1_temp']),
        'cooler2_temp' => $db->escapeString($_POST['cooler2_temp']),
        'freezer_temp' => $db->escapeString($_POST['freezer_temp']),
        'paa_concentration' => $db->escapeString($_POST['paa_concentration']),
        'no_rodent_droppings' => $db->escapeString($_POST['no_rodent_droppings']),
        'rework_chicken_process' => $db->escapeString($_POST['rework_chicken_process']),
        'others' => $db->escapeString($_POST['others'])
    ];

    if ($db->Update('ssop_02', $params , "SSOP_02_id = $id")) {
        // ---------------------------
        $_SESSION['message'] = 'Data Update successfully';
        header('Location: ../SSOP-02');
        exit;
    } else {
        $_SESSION['message'] = 'Error inserting data';
    }
}

// --------------------delete--------------------
if (isset($_GET['Delete_id'])) {
    $id = $db->escapeString($_GET['Delete_id']);
    if ($db->delete('ssop_02', "SSOP_02_id = $id")) {
        $_SESSION['delete'] = 'Data deleted successfully';
        header('Location: ../SSOP-02');
        exit;
    } else {
        $_SESSION['delete'] = 'Error deleting data';
    }
}


