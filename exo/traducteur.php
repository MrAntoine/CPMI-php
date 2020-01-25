
<form method="post" action="exo/process/traduction.php">
    <label>Mon super traducteur  : </label>
    <select name="lang">
        <option value="en-fr">EN to FR</option>
        <option value="fr-en">FR to EN</option>
    </select>
    <input type="text" name="mot" required>
    <input type="text" name="result" disabled>
    <button type="submit">Traduire</button>
</form>

<?php

?>