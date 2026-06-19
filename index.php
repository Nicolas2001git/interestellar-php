<?php
include("connection.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $astronaut_name = mysqli_real_escape_string($connection, $_POST["astronaut_name"]);
    $planet = mysqli_real_escape_string($connection, $_POST["planet"]);
    $mission_type = mysqli_real_escape_string($connection, $_POST["mission_type"]);
    $mission_description = mysqli_real_escape_string($connection, $_POST["mission_description"]);

    $image_name = "";

    if (!empty($_FILES["image"]["name"])) {
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $image_tmp = $_FILES["image"]["tmp_name"];
        $upload_path = "uploads/" . $image_name;

        if (!is_dir("uploads")) {
            mkdir("uploads", 0777, true);
        }

        move_uploaded_file($image_tmp, $upload_path);
    }

    $query = "INSERT INTO missions 
    (astronaut_name, planet, mission_type, mission_description, image)
    VALUES 
    ('$astronaut_name', '$planet', '$mission_type', '$mission_description', '$image_name')";

    if (mysqli_query($connection, $query)) {
        $message = "Mission registered successfully.";
    } else {
        $message = "Error registering the mission.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INTERSTELLAR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="star-field"></div>

    <header class="main-header">
        <h1>INTERSTELLAR</h1>
    </header>

    <main class="command-panel">

        <section class="space-card">
            <h2>Register a New Mission</h2>

            <?php if ($message !== ""): ?>
                <p class="message"><?php echo $message; ?></p>
            <?php endif; ?>

            <form action="index.php" method="POST" enctype="multipart/form-data" class="mission-form">

                <label for="astronaut_name">Astronaut Name</label>
                <input type="text" id="astronaut_name" name="astronaut_name" placeholder="Example: Cooper"required>

                <label for="planet">Planet or Destination</label>
                <input type="text" id="planet" name="planet" placeholder="Example: Saturn"required>

                <label for="mission_type">Mission Type</label>
                <select id="mission_type" name="mission_type" required>
                    <option value="">Select a mission type</option>
                    <option value="Exploration">Exploration</option>
                    <option value="Research">Research</option>
                    <option value="Rescue">Rescue</option>
                    <option value="Colonization">Colonization</option>
                    <option value="Reconnaissance">Reconnaissance</option>
                </select>

                <label for="mission_description">Mission Description</label>
                <textarea id="mission_description" name="mission_description" rows="5" placeholder="Describe the mission objectives..."required></textarea>

                <label for="image">Mission Image</label>
                <input type="file" id="image" name="image" accept="image/*">

                <button type="submit">Launch Mission</button>
            </form>
        </section>

        <section class="navigation-card">
            <h2>Control Center</h2>
            <p>From here you can view all registered missions</p>
            <a href="missions.php" class="space-link">View Missions</a>
        </section>

    </main>

</body>
</html>