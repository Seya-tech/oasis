<section id="team">
    <h2>Our Team</h2>
    <div class="team-grid">
        <?php
        $team_members = [
            ["John Doe", "Public Health Specialist"],
            ["Jane Smith", "Program Manager"]
        ];

        foreach ($team_members as $member) {
            echo "<div class='team-member'>";
            echo "<img src='https://via.placeholder.com/150' alt='{$member[0]}'>";
            echo "<h3>{$member[0]}</h3>";
            echo "<p>{$member[1]}</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>