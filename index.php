<html>
    <p>
    <?php
    
    print $randomNumber = rand(0,3);
    ?>
    </p>
    <p>
    <?php
    $name = "Paul";
    $randomLetterFromName = substr($name,$randomNumber,1);
    print $randomLetterFromName;
    ?>
    </p>
</html>


<html>
    <p>
    <?php
            
    $name = "Paul";
    $nameLength = strlen($name);
    print $randomNumber = rand(0,($nameLength - 1));
    ?>
    </p>
    
    <p>
    <?php
    $randomLetterFromName = substr($name,$randomNumber,1);
    print $randomLetterFromName;
    ?>
    </p>
</html>