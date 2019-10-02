<?php
    $num1 = 0;
    $num2 = 0;
    $total = 0;
    $option = "";
    $error = "";

    if (isset($_GET['submit']))
    {

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $option = $_GET['choice'];

        if(is_numeric($num1) && is_numeric($num2))
        {
            if ($option == 'plus') 
            {
                $total = $num1 + $num2;
            }
            if ($option == 'minus')
            {
                $total = $num1 - $num2;
            }
            if ($option == 'dividedby') 
            {
                $total = $num1 / $num2;
            }
            if ($option == 'multiply') 
            {
                $total = $num1 * $num2;
            }
            if ($option == 'sqrt') 
            {
                $total = sqrt($num1);
            }
            if ($option ==  'powerof')
            {
            $total = pow($num1, $num2);
            }
            if ($option == 'M2Km')
            {
            $total = $num1 * 1.609344;
            }
            if ($option == 'Km2M')
            {
            $total = $num1 * 0.621371192;
            }
            echo $total;
           
        }
        else {
            $error = "Only numbers";
            echo $error;
            // Shows the "Only numbers" error
            }
    }
    // Calculate total
    ?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8"/>

    <meta name="description" content="Lahcen's_Calculator">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <title>Calculator</title>
</head>
<body>

    <div class="container">
        <div class="top-part">
       <?php echo $total; ?>
    </div>
        <div class="bottom-part">
                <form method="get">
                        <label>Number 1:</label>
                        <input type="text" name="num1">

                        <label>Operator:</label>
                        <select name="choice">
                            <option value="plus">+</option>
                            <option value="minus">-</option>
                            <option value="dividedby">/</option>
                            <option value="multiply">*</option>
                            <option value="sqrt">√</option>
                            <option value="powerof">^</option>
                            <option value="M2Km">Mile to Km</option>
                            <option value="Km2M">Km to Mile</option>
                        </select>
                        <label>Number 2:</label>
                        <input type="text" name="num2">
                        <input type="submit" class="submit1" name="submit" type="submit" value="Calculate" class="Submitbutton">
                        <input type="reset" class="reset" name="reset" type="reset" value="Reset">
                </form>           
        </div>
    </div>
</body>
</html>