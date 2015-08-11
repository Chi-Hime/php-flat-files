<?php
   $file = fopen("shakespeare.txt", "r") or die("shakespeare poem died!");
    
   $file_data = fread($file,filesize("shakespeare.txt"));
    
   fclose($file);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Flat File Mini Assignment</title>
        <link rel="stylesheet" href="style.css" type="text/css" />   
    </head>
    
    <body>
        <h1>ADDRESS TO SHAKESPEARS BY William Topaz McGonagall</h1>
        
        	<form action="AddLine.php" method="POST">
        		<fieldset>
        			<legend> ADD A LINE OF TEXT TO THE END OF FILE </legend>
        				<input type="text>" name="AddLine"/>
        				<input type="submit" value="add"/>
        		</fieldset>
        	</form>
        	<pre><?php echo $file_data; ?></pre>
    </body>
</html>
