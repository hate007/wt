<?php
    $value = $_GET['value'];
    //$value="contact.dat";
    if((is_file($value))) {
        $fp1=fopen($value,"r")or die("Unable to open a file....");	
        $buf1=fread($fp1,filesize($value));
        $temprecs=explode("\n",$buf1);
        $i=0;
        foreach($temprecs as $t)
            if(strlen($t)>0)
                $records[$i++]=explode(" ",$t);
        echo"<p>********Contact Detalis******</p>";
        echo "<table border=2>";
        echo"<tr><th>SRNO</th><th>Name</th><th>Residance no</th><th>Mobile no</th><th>Context</th></tr>";
        foreach($records as $rec) {
            echo "<tr>";
            foreach($rec as $f) {
                printf("<td>%s</td>",$f);
            }
        }
        echo"</table>";
        fclose($fp1);
    } else
        echo "  file not exists";
?>