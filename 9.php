<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
</head>
<body>
      <?php
      
          $states="Mississippi Alabama Texas Massachusetts Kansas";
          preg_match("/\b\w*xas\b/i",$states,$matches);
          $statesarr[0] = $matches[0];
          echo "States Ending with xas : $matches[0]";

          preg_match("/\b\k\w*s\b/i",$states,$matches);
          $statesarr[1]=$matches[0];
          echo "<br>States begin with k and Ending with s :$matches[0]";

          preg_match("/\b\m\w*s\b/i",$states,$matches);
          $statesarr[2]=$matches[0];
          echo "<br>States begin with m and Ending with xas :$matches[0]";

          preg_match("/\b\w*a\b/i",$states,$matches);
          $statesarr[3]=$matches[0];
          echo "<br>States Ending with a :$matches[0]";

          list($a,$b,$c,$d) = $statesarr;
          echo "<br><h3> List Attributes are:<br>".$a."<br>".$b."<br>".$c."<br>".$d."</h3>";

          ?>
      </body>
      </html>