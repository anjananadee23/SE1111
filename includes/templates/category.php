<?php
// Include your database connection file here

$startIndex = 0;
$endIndex = $startIndex + 4; // Assuming you want to display 4 categories per page

$sql = "SELECT jc.id AS category_id,jc.category,(SELECT COUNT(*) FROM jobs j WHERE j.category_id = jc.id) AS total_count FROM job_categories jc";
$result = $conn->query($sql);

$categories = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}


?>

<div class="width-100 skill-section">
    <div class="arrow left" id="arrow-left"> <i class="fa fa-chevron-left" aria-hidden="true"></i></div>

    <div class="container">
    </div>
    <div class="arrow right" id="arrow-right"> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>

</div>

<script>
    var startIndex = <?php echo $startIndex; ?>;
    var endIndex = <?php echo $endIndex; ?>;
    var categories = <?php echo json_encode($categories); ?>;

    document.getElementById('arrow-left').addEventListener('click', function() {
        if (startIndex > 0) {
            startIndex -= 1;
            endIndex -= 1;
            updateDisplay();
        }
    });

    document.getElementById('arrow-right').addEventListener('click', function() {
        if (endIndex < categories.length) {
            startIndex += 1;
            endIndex += 1;
            updateDisplay();
        }
    });

    function updateDisplay() {
        var displayCategories = categories.slice(startIndex, endIndex);
        var categoryContainer = document.querySelector('.width-100.skill-section .container');
        categoryContainer.innerHTML = displayCategories.map(category => `
        <div class="skill-list">
            <div class="width-33">
                <img class="skill-img" src="assets/images/skill-1.png">
            </div>
            <div class="width-66">
                <h4>${category.category}</h4>
                <button class="view-button">${category.total_count}</button>
            </div>
        </div>
    `).join('');
    }

    // Initial display
    updateDisplay();
</script>