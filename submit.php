<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $physical = $_POST["physical"];
    $intellectual = $_POST["intellectual"];
    $emotional = $_POST["emotional"];
    $social = $_POST["social"];
    $spiritual = $_POST["spiritual"];
    $occupational = $_POST["occupational"];
    $financial = $_POST["financial"];
    $environmental = $_POST["environmental"];

    // Display the submitted data
    echo "Physical: " . $physical . "<br>";
    echo "Intellectual: " . $intellectual . "<br>";
    echo "Emotional: " . $emotional . "<br>";
    echo "Social: " . $social . "<br>";
    echo "Spiritual: " . $spiritual . "<br>";
    echo "Occupational: " . $occupational . "<br>";
    echo "Financial: " . $financial . "<br>";
    echo "Environmental: " . $environmental . "<br>";
}
?>
