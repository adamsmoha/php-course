<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Outputs</title>
</head>
<body>
    <h2>Echo</h2>
    <p>Output strings, numbers, html, etc and can be used with multiple arguments</p>
    <li><?php echo 'Hello';?></li>
    <li><?php echo 123,'Hello',10.5;?></li>

    <h2>Print</h2>
    <p>works like echo, but can only take in a single argument</p>
    <li><?php print 'Hello';?></li>

    <h2>print_r</h2>
    <p>Print single values and arrays</p>
    <li><?php print_r ([1,2,3]);?></li>

    <h2>var_dump</h2>
    <p>Returns more info like data type and length</p>
    <li><?php var_dump(true);?></li>

    <h2>var_export</h2>
    <p>Similar to var_dump(). Outputs a string representation of a variable</p>
    <li><?php var_export('Hello');?></li>

</body>
</html>