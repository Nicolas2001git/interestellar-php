<?php
include("connection.php");

$query = "SELECT * FROM missions ORDER BY created_at DESC";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Missions | INTERSTELLAR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="star-field"></div>

    <header class="main-header">
        <h1>MISSIONS</h1>
        <p>Official record of interstellar journeys</p>
    </header>

    <main class="command-panel">

        <section class="navigation-card">
            <a href="create_mission.php" class="space-link">Register New Mission</a>
        </section>

        <section class="mission-grid">

            <?php if (mysqli_num_rows($result) > 0): ?>

                <?php while ($mission = mysqli_fetch_assoc($result)): ?>

                    <article class="mission-card">

                        <?php if (!empty($mission["image"])): ?>
                            <img  src="uploads/<?php echo htmlspecialchars($mission["image"]); ?>" alt="Mission image,sorry Coop" class="mission-image">
                        <?php else: ?>
                            <div class="no-image">
                                No image,at the moment.....
                            </div>
                        <?php endif; ?>
                        <div class="mission-content">
                            <h2><?php echo htmlspecialchars($mission["planet"]); ?></h2>
                            <p><strong>Astronaut:</strong><?php echo htmlspecialchars($mission["astronaut_name"]); ?></p>
                            <p><strong>Mission type:</strong><?php echo htmlspecialchars($mission["mission_type"]); ?></p>
                            <p><strong>Description:</strong><?php echo htmlspecialchars($mission["mission_description"]); ?></p>
                            <p class="date">Registered on:<?php echo $mission["created_at"]; ?></p>
                            <a  href="delete_mission.php?id=<?php echo $mission["id"]; ?>" class="meteor-delete"onclick="return confirm('Are you sure you want to delete this mission?');">
                                Delete Mission
                            </a>
                        </div>
                    </article>

                <?php endwhile; ?>

            <?php else: ?>

                <div class="empty-space">
                    <h2>No missions registered</h2>
                    <p>Space is still waiting for its first expedition.</p>
                </div>

            <?php endif; ?>

        </section>

    </main>

</body>
</html>