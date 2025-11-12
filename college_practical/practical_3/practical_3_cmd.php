<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area Calculator</title>
</head>
<body>
    <h2>Calculate the Area of a Rectangle</h2>
    <form method="post">
        <label for="length">Length:</label>
        <input type="number" name="length" id="length" required><br><br>

        <label for="width">Width:</label>
        <input type="number" name="width" id="width" required><br><br>

        <input type="submit" value="Calculate Area">
    </form>

<?php
echo "Enter the length of the rectangle: ";
$length = trim(fgets(STDIN));

echo "Enter the width of the rectangle: ";
$width = trim(fgets(STDIN));

// Validate input
if (!is_numeric($length) || !is_numeric($width)) {
    echo "Error: Please enter valid numeric values.\n";
    exit(1);
}

if(is_numeric($length) && is_numeric($width)){
   $area = $length * $width;

// Display result
echo "Length: $length units\n";
echo "Width: $width units\n";
echo "Area of the rectangle: $area square units\n";

}

// Calculate area

?>
</body>
</html>