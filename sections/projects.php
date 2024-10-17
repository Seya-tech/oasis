<section id="projects">
    <h2>Our Projects</h2>
    <div class="projects-grid">
        <?php
        $projects = [
            ["COVID-19 Response Program", "A comprehensive program to combat the spread of COVID-19 in underserved communities."],
            ["Maternal Health Initiative", "Improving maternal health outcomes in rural areas through education and healthcare access."]
        ];

        foreach ($projects as $project) {
            echo "<div class='project-card'>";
            echo "<h3>{$project[0]}</h3>";
            echo "<p>{$project[1]}</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>