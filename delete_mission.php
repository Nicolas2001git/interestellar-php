<?php
include("connection.php");

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);

    $image_query = "SELECT image FROM missions WHERE id = $id";
    $image_result = mysqli_query($connection, $image_query);

    if ($image_result && mysqli_num_rows($image_result) > 0) {
        $mission = mysqli_fetch_assoc($image_result);

        if (!empty($mission["image"])) {
            $image_path = "uploads/" . $mission["image"];

            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
    }

    $delete_query = "DELETE FROM missions WHERE id = $id";
    mysqli_query($connection, $delete_query);
}

header("Location: missions.php");
exit();
?>