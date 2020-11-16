<style> <?php include 'tableStyle.css'; ?> </style>
<?php	error_reporting(E_ALL);
	ini_set("display_errors", 1);
    echo "<p>Multiplication_Table</p>";
    echo "<table style='border: 1px solid black, width: 100%'>";
    for ($i = 1; $i <= 10; $i++)
	{
        echo "<tr>";
            for ($j = 1; $j <= 10; $j++)
	{
                echo "<td s>" . ($i * $j) . "</td>";
            }
        echo "</tr>";
	}
    echo "</table>";
?>