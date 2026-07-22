<?php
require_once 'config/database.php';
require_once 'config/auth.php'; 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = intval($_GET['id']);
    $redirect_to = isset($_GET['from']) ? $_GET['from'] : 'dashboard.php';

    try {
        $delete_appointments = "DELETE FROM appointments WHERE patient_id = ? OR doctor_id = ?";
        $stmt1 = $conn->prepare($delete_appointments);
        $stmt1->bind_param("ii", $user_id, $user_id);
        $stmt1->execute();

        $delete_user = "DELETE FROM users WHERE id = ?";
        $stmt2 = $conn->prepare($delete_user);
        $stmt2->bind_param("i", $user_id);
        $stmt2->execute();

        header("Location: " . $redirect_to . "?msg=deleted");
        exit();

    } catch (Exception $e) {
        die("Error deleting record: " . $e->getMessage());
    }
} else {
    header("Location: dashboard.php");
    exit();
}