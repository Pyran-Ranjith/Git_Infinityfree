<?php
require_once './includes/_essentials.php';
require_once './db/conn.php';
        $id = $_GET['id'];

        //Call Delete function
        $result = $booking->deleteBooking($id);
        //Redirect to list
             _redirect("./bookings.php");
?>
