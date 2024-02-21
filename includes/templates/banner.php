<!------SEARCH SECTION SEARCH SECTION SEARCH SECTION ------>
<?php
// Assuming you have already established a database connection

// Query to fetch all job categories from the database table
$sql = "SELECT * FROM job_categories";
$result = $conn->query($sql);
// Check if query executed successfully
if ($result) {
    // Create an array to store all categories
    $categories = array();

    // Fetch categories and store them in the array
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row['category'];
    }

    // Close the result set
    mysqli_free_result($result);
} else {
    // Query failed
    echo "Error: ";
}


?>

<div class="width-100 banner-section">
  <div class="container">
    <h1 class="banner-heading">Your Next Career Move Starts Here</h1>
    <p class="banner-para"> Explore Jobs, Ignite Success!</p>
    <div class="search-sect">
      <input type="text" class="search-textbox" placeholder="Search Company">
    </div>
    <div class="search-sect">
      <input type="text" class="search-textbox" placeholder="Select Location">
      <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
    </div>
    <div class="search-sect">
    <select class="search-textbox">
        <option value="">All categories</option>
         <?php
        // Loop through the categories array to generate options for the dropdown
        foreach ($categories as $category) {
            echo "<option value=\"$category\">$category</option>";
        }
       
        ?>
    </select>
    <!-- <i class="fa fa-caret-down icons" aria-hidden="true"></i> -->
</div>
    <div class="search-sect">
      <button class="search-button">
        <i class="fa fa-search " aria-hidden="true"></i> Search Here </button>
    </div>
  </div>
</div>