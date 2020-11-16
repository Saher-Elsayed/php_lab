<style> <?php include 'table.css'; ?> </style>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $iteam1 = $_POST["Q1"];
    $iteam2 = $_POST["Q2"];
    $iteam3 = $_POST["Q3"];
    $shiping = $_POST["shipping"];

    echo "<table>";
    echo "<tr>";
    echo "<th></th>";
    echo "<th><b>Quantity</b></th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 1</th>";
    echo "<td>" . $iteam1 . "</td>";
    echo "<td>" . "$1" . "</td>";
    echo "<td>$" . (1 * $iteam1 ) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 2</th>";
    echo "<td>" . $iteam2 . "</td>";
    echo "<td>" . "$2" . "</td>";
    echo "<td>$" . (2* $iteam2) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 3</th>";
    echo "<td>" . $iteam3 . "</td>";
    echo "<td>" . "$3" . "</td>";
    echo "<td>$" . (3 * $iteam3) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Shipping</th>";
    echo "<td colspan='2'>" . $shiping . "</td>";
    $costForShiping = 0;
    if ($shiping == "Free 7 Day")
	{ 
		$costForShiping = 0;
	}
    if ($shiping == "$50.00 Over Night") 
	{ 
		$costForShiping = 50;
	}
    if ($shiping == "$5.00 3 Day")
	{
	    $costForShiping = 5;
	}
    echo "<td>$" . $costForShiping . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th colspan='3'>Total Cost</th>";
    echo "<td>$" . ( (1 * $iteam1) + (2 * $iteam2) + (3 * $iteam3) + $costForShiping  ) . "</td>";
    echo "</tr>";

    echo "</table>";
?>