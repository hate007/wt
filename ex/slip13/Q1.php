<?php
 //Getthenameenteredbytheuser
 $name=$_POST['name'];
 //Checkifthenameisempty
 if(empty($name)){
    echo'Stranger,please tell me your name!';
 }
 //Checkifthenameisoneofthemasternames
 else if($name=='Rohit'||$name=='Virat'|| $name=='Dhoni' || $name=='Ashwin'|| $name=='Harbhajan'){
    echo'Hello,master!';
 }
 else{
    echo $name.",I don't knowyou!";
}
?>