<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Diabetes</title>
        <link rel="stylesheet" href="Diabetes.css">
    </head>

    <body>
        <h1>Diabetes</h1>
        <ul id="bb"></ul>
        <p>
            <h3>Please enter the foods/drinks you have consumed in the boxes below; then click submit.</h3>
        </p>

        <ul id="bb">
            <?php
                //$results2 = $pdo->query("SELECT * FROM Diabetes");
                //foreach($results2 as $r){
                    //$liContent = "{$r['Name']} contains the following nutritional information:
                    //{$r['Carbs']}";
                    //echo " <li>" . $liContent . "</li>\n";
                //}
            ?>
        </ul>

        <!--
        <form>
            <label>Search for items by type (food/drink): </label>
            <input type="text" type="Type"></input>
            <br/>
                <input type="submit"></submit>
        </form>
        
        <p>
            <h3>Item Type</h3>
        </p>
        -->
        <ul>
        <?php
            //foreach($results as $r) {
                //$liContent = "{$r['Name']} is type: {$r['Type']}";
                //echo "  <li>" . $liContent . "</li>\n";
            //}
        ?>
        </ul>

        <form id="carbForm" name="carbForm" method = "post" action="carbs.php">
            Item 1:<br>
            <input type="text" name="type1" id="type1"><br>
            Item 2:<br>
            <input type="text" name="type2" id="type2"><br>
            Item 3:<br>
            <input type="text" name="type3" id="type3"><br>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>
