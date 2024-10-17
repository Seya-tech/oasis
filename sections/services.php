<section id="services">
    <h2>Our Services</h2>
    <div class="services-grid">
        <?php
        $services = [
            ["Public Health Research", "Conducting comprehensive research to inform public health policies and interventions."],
            ["Program Management", "Efficiently managing public health programs from conception to implementation."],
            ["Monitoring and Evaluation", "Assessing the impact and effectiveness of health initiatives and programs."],
            ["Project Proposal Development", "Crafting compelling proposals to secure funding for crucial public health projects."]
        ];

        foreach ($services as $service) {
            echo "<div class='service-card'>";
            echo "<h3>{$service[0]}</h3>";
            echo "<p>{$service[1]}</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>