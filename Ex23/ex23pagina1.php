<html>
<head>
<?php

    if(isset($_GET)){
        if($_GET["elements"]== "foc"){
            echo "<link rel = \"stylesheet\"href=\"foc.css\">";
        }
        if($_GET["elements"]== "aigua"){
            echo "<link rel = \"stylesheet\"href=\"aigua.css\">";
        }
        if($_GET["elements"]== "terra"){
            echo "<link rel = \"stylesheet\"href=\"terra.css\">";
        }
    }
?>
</head>
<form>
    <label>Selecciona un elemento: </label>
    <select name="elements">
        <option value="foc"> Foc1</option>
        <option value="aigua"> ~aiGuA~</option>
        <option value="terra"> terra</option>
    </select>
    <input type="submit" value="Enviar">
    
</form>

</body>
</html>
