<?php

//These sides and angles of a triangle are given to calculate the perimeter, area, sine, cosine, and tangent of a triangle.

$Side1 = 14.8;	
$Side2 = 20.3;
$Side3 = 25.3;

$Angle1 = 36;
$Angle2 = 53;
$Angle3 = 91;

echo "Perimeter = ".My_perimeter($Side1, $Side2, $Side3)."<br/>";

//In order to find the perimeter of the triangle we have to add all three lengths of the triangle (Side1, Side2, Side3)

function My_perimeter($Side1, $Side2, $Side3){
$perimeter= $Side1 + $Side2 + $Side3;
return ($perimeter);}

echo "Area = ".My_area ($Side1, $Side2, $Side3)."<br/>";

//We can also calculate the area of the triangle as the sides are already given.

function My_Area($Side1, $Side2, $Side3){
$area = ($Side1 + $Side2 + $Side3)/2;
return sqrt($area * ($area - $Side1) * ($area - $Side2) * ($area - $Side3));}
echo "Sine = ".My_sine($Angle1)."<br/>";

//The sine of the angles can be calculated by this formula
 
function My_sine($Angle1){
	return sin(deg2rad($Angle1));}
echo "Cosine = ".My_cos($Angle1)."<br/>";

//The cosine of the angles can be calculated by this formula

function My_cos($Angle1){
	return cos(deg2rad($Angle1));}

echo "Tangent = ".My_tan($Angle1)."<br/>";

//The tangent of the given angles can be calculated by this formula

function My_tan($Angle1){
	return tan(deg2rad($Angle1));}

?>
