<?php

include "connect.php";
include "includes/templates/header.php";
include "includes/templates/navbar.php";
include "includes/templates/banner.php";
include "includes/templates/category.php";

?>
<main>
    <article>
        <!-- SEARCH SECTION -->
        <!-- RECENT JOB SECTION -->
        <div class="width-100 recent-job">
            <div class="container">
                <h2 class="recent-job-heading">RECENT JOBS</h2>
                
                <!-- JOB LIST -->
                <?php
                // SQL query to select all jobs ordered by created_at in ascending order
                $sql = "SELECT * FROM jobs ORDER BY created_at Desc";
                // Execute the query
                $result = $conn->query($sql);
                // Check if there are rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="width-50">
                            <div class="recent-job-list">
                                <div class="width-100">
                                    <h4 class="job-title"><?php echo $row["name"]; ?></h4>
                                    <p class="job-company"><?php echo $row["company_name"]; ?><i class="fa fa-star" aria-hidden="true"></i> | <?php echo('234') ?> Reviews </p>
                                </div>
                                <div class="width-33">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i> <?php echo $row["experience"]; ?>
                                </div>
                                <div class="width-33">
                                    <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row["salary"]; ?>
                                </div>
                                <div class="width-33">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["location"]; ?>
                                </div>
                                <div class="width-100">
                                    <p class="job-skill">
                                        <b>Skills : </b><?php echo $row["skills"]; ?>
                                    </p>
                                </div>
                                <div class="width-100">
                                    <a href="#" class="job-apply-button">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p class='width-100'>No jobs found.</p>";
                }
                // Close the connection
                $conn->close();
                ?>
            </div>
        </div>
    </article>
</main>


<?php
include "includes/templates/footer.php";
?>