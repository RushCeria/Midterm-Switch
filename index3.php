<style>
    .red   { color: red; }
    .green { color: green; }
    .blue  { color: blue; }
</style>

<form>
    <select name="color">
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
    </select>
    <input type="submit" value="Color me!">
</form>

<?php
    if ( isset($_GET['color']) ) {
        print '<span class="' . $_GET['color'] . '">Color me happy.</span>';
    }
?>