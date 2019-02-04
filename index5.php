<?php
if (isset($_POST['colorchoice'])) {
$colorvalue =$_POST['colorchoice'];      
print "<span ><font color=".$colorvalue.">Color me happy.</font></span>";
      }else{}    ?>
<form action="#" method=post>

<p> <select  name="colorchoice" size="1">
<option value="redtext">Red</option>
<option value="bluetext">Blue</option>
<option value="greentext">Green</option>
</select>
</p>
<p>
<input type="submit" value="Submit Information"></form>
</p>