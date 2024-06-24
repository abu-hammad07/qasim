<?php
session_start();
include_once('database.php');
$db = new database();
if (isset($_POST['submit'])) {
    // --------data already exist ----------

    $date = $db->escapeString($_POST['date']);
    $result = $db->dataExists('ssop_01', "date = '$date'" ,  "SSOP_01_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../SSOP-01_add?id='.$id);
        exit;
    } else {
    }


    $params = [
        'date' => $db->escapeString($_POST['date']),
        'no_condensation' => $db->escapeString($_POST['no_condensation']),
        'no_rodent_roaches_gnat' => $db->escapeString($_POST['no_rodent_roaches_gnat']),
        'handwash_station' => $db->escapeString($_POST['handwash_station']),
        'inedible_room_barrels' => $db->escapeString($_POST['inedible_room_barrels']),
        'receiving_area' => $db->escapeString($_POST['receiving_area']),
        'killing_area' => $db->escapeString($_POST['killing_area']),
        'kill_room_knives' => $db->escapeString($_POST['kill_room_knives']),
        'kill_room_product_cans' => $db->escapeString($_POST['kill_room_product_cans']),
        'picking_area_walls_ceiling_floor' => $db->escapeString($_POST['picking_area_walls_ceiling_floor']),
        'picking_area_picker' => $db->escapeString($_POST['picking_area_picker']),
        'scald_vat' => $db->escapeString($_POST['scald_vat']),
        'evisceration_table' => $db->escapeString($_POST['evisceration_table']),
        'evisceration_walls_ceiling_floor' => $db->escapeString($_POST['evisceration_walls_ceiling_floor']),
        'giblet_table_utensils' => $db->escapeString($_POST['giblet_table_utensils']),
        'chill_tanks' => $db->escapeString($_POST['chill_tanks']),
        'scale_shovels' => $db->escapeString($_POST['scale_shovels']),
        'ice_machines' => $db->escapeString($_POST['ice_machines']),
        'hand_trucks_dollies' => $db->escapeString($_POST['hand_trucks_dollies']),
        'packing_area_walls_ceiling' => $db->escapeString($_POST['packing_area_walls_ceiling']),
        'packing_scales_tables_utensils' => $db->escapeString($_POST['packing_scales_tables_utensils']),
        'coolers_freezer' => $db->escapeString($_POST['coolers_and_freezer']),
        'all_contact_surfaces_intact' => $db->escapeString($_POST['all_contact_surfaces_intact']),
        'cooler_1_temp' => $db->escapeString($_POST['cooler_1_temp']),
        'cooler_2_temp' => $db->escapeString($_POST['cooler_2_temp']),
        'freezer_temp' => $db->escapeString($_POST['freezer_temp']),
        'paa_concentration_wash_station' => $db->escapeString($_POST['paa_concentration_wash_station']),
        'paa_concentration_chiller_dip' => $db->escapeString($_POST['paa_concentration_chiller_dip']),
        'paa_concentration_sprayer' => $db->escapeString($_POST['paa_concentration_sprayer']),
        'scalding_water_temp' => $db->escapeString($_POST['scalding_water_temp']),
        'no_rodent_droppings' => $db->escapeString($_POST['no_rodent_droppings']),
        'others' => $db->escapeString($_POST['others'])
    ];

    if ($db->insert('ssop_01', $params)) {
        // ---------------------------
        $_SESSION['message'] = 'Data inserted successfully';
        header('Location: ../SSOP-01.php');
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
    $result = $db->dataExists('ssop_01', "date = '$date'" ,  "SSOP_01_id != '$id'");
    if ($result) {
        $_SESSION['already'] = 'Data already exists';
        header('Location: ../ssop-01_edit.php?id='.$id);
        exit;
    } else {
    }


    $params = [
        'date' => $db->escapeString($_POST['date']),
        'no_condensation' => $db->escapeString($_POST['no_condensation']),
        'no_rodent_roaches_gnat' => $db->escapeString($_POST['no_rodent_roaches_gnat']),
        'handwash_station' => $db->escapeString($_POST['handwash_station']),
        'inedible_room_barrels' => $db->escapeString($_POST['inedible_room_barrels']),
        'receiving_area' => $db->escapeString($_POST['receiving_area']),
        'killing_area' => $db->escapeString($_POST['killing_area']),
        'kill_room_knives' => $db->escapeString($_POST['kill_room_knives']),
        'kill_room_product_cans' => $db->escapeString($_POST['kill_room_product_cans']),
        'picking_area_walls_ceiling_floor' => $db->escapeString($_POST['picking_area_walls_ceiling_floor']),
        'picking_area_picker' => $db->escapeString($_POST['picking_area_picker']),
        'scald_vat' => $db->escapeString($_POST['scald_vat']),
        'evisceration_table' => $db->escapeString($_POST['evisceration_table']),
        'evisceration_walls_ceiling_floor' => $db->escapeString($_POST['evisceration_walls_ceiling_floor']),
        'giblet_table_utensils' => $db->escapeString($_POST['giblet_table_utensils']),
        'chill_tanks' => $db->escapeString($_POST['chill_tanks']),
        'scale_shovels' => $db->escapeString($_POST['scale_shovels']),
        'ice_machines' => $db->escapeString($_POST['ice_machines']),
        'hand_trucks_dollies' => $db->escapeString($_POST['hand_trucks_dollies']),
        'packing_area_walls_ceiling' => $db->escapeString($_POST['packing_area_walls_ceiling']),
        'packing_scales_tables_utensils' => $db->escapeString($_POST['packing_scales_tables_utensils']),
        'coolers_freezer' => $db->escapeString($_POST['coolers_and_freezer']),
        'all_contact_surfaces_intact' => $db->escapeString($_POST['all_contact_surfaces_intact']),
        'cooler_1_temp' => $db->escapeString($_POST['cooler_1_temp']),
        'cooler_2_temp' => $db->escapeString($_POST['cooler_2_temp']),
        'freezer_temp' => $db->escapeString($_POST['freezer_temp']),
        'paa_concentration_wash_station' => $db->escapeString($_POST['paa_concentration_wash_station']),
        'paa_concentration_chiller_dip' => $db->escapeString($_POST['paa_concentration_chiller_dip']),
        'paa_concentration_sprayer' => $db->escapeString($_POST['paa_concentration_sprayer']),
        'scalding_water_temp' => $db->escapeString($_POST['scalding_water_temp']),
        'no_rodent_droppings' => $db->escapeString($_POST['no_rodent_droppings']),
        'others' => $db->escapeString($_POST['others'])
    ];

    if ($db->Update('ssop_01', $params , "SSOP_01_id = $id")) {
        // ---------------------------
        $_SESSION['message'] = 'Data Update successfully';
        header('Location: ../SSOP-01');
        exit;
    } else {
        $_SESSION['message'] = 'Error inserting data';
    }
}

// --------------------delete--------------------
if (isset($_GET['Delete_id'])) {
    $id = $db->escapeString($_GET['Delete_id']);
    if ($db->delete('ssop_01', "SSOP_01_id = $id")) {
        $_SESSION['delete'] = 'Data deleted successfully';
        header('Location: ../SSOP-01');
        exit;
    } else {
        $_SESSION['delete'] = 'Error deleting data';
    }
}


