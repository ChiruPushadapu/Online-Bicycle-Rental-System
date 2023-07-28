<html>
<head>
<title>form</title>
</head>
<body>
    <form method="POST">

        Name : 
        <input type="text" name="name" >
        
        <input type="submit" name="sub" value="submit">

        <?php
        if(isset($_POST['sub'])){
            $str=$_POST['name'];
            
            
            $starr =str_split($str,1);
            print_r($starr);
            $temp=0;
            $chr=[];
            for($i=0;$i<count($starr);$i++){
                $chr[$i] = ord($starr[$i]);
                if($starr[$i]=='a'||$starr[$i]=='e'||$starr[$i]=='i'||$starr[$i]=='o'||$starr[$i]=='u'){
                    $temp++;
                }
            }
            print_r($chr);
            print($temp);
            $c=substr($str,0,3);
            $c=strrev($c);
            
            $ch=str_repeat($c,$temp);
            echo"$ch";


        }


?>
    </from>


</body>
</html>