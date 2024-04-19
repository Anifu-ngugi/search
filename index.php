<?php
include 'header.php';
?>
<form action="search.php" method = "POST">
<label for="num_rooms">Number of Bedrooms:</label>
        <select name="num_rooms" id="num_rooms">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>
<label for="square_ft">Square Footage:</label>
        <select name="square_ft" id="square_ft">
            <option value="100-500ft">100-500 ft</option>
            <option value="600-1000ft">600-1000 ft</option>
            <option value="1100-1500ft">1100-1500 ft</option>
            <option value="1600-2000ft">1600-2000 ft</option>
            <option value="2100-2500ft">2100-2500 ft</option>
            <option value="2600-3000ft">2600-3000 ft</option>
        </select><br><br>
        
<label for="region">Region:</label>
        <select name="region" id="region">
            <option value="Nyeri">Nyeri</option>
            <option value="Muranga">Murang'a</option>
            <option value="Kisumu">kisumu</option>
            <option value="Kiambu">Kiambu</option>
            <option value="Nairobi">Nairobi</option>
        </select><br><br>
        
    <input type="submit" value="Search">
</form>

</body>
</html> 