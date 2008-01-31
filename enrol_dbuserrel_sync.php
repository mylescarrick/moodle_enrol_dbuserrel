<?php // $Id$

    if(!empty($_SERVER['GATEWAY_INTERFACE'])){
        error_log("should not be called from apache!");
        exit;
    }
    error_reporting(E_ALL);
    
    require_once(dirname(dirname(dirname(__FILE__))).'/config.php'); // global moodle config file.

    require_once($CFG->dirroot . "/enrol/dbuserrel/enrol.php");

    // ensure errors are well explained
    $CFG->debug=E_ALL;

    $enrol = new enrolment_plugin_dbuserrel();
    $enrol->setup_enrolments(); 

?>
