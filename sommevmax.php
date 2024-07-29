<!DOCTYPE html>
<html>

<head>
       <meta charset="utf-8">
       <title></title>
</head>

<body>

       <form action="sommevmax.php" method="POST">
              <label> entrer un nombre</label>
              <input type="number" name="N">
              <input type="submit" value="somme" name="somme">
       </form>

       <?php
         if (isset($_POST['somme'])){
            $N=$_POST['N'];
            $s=0;
            $vmax=10;
            for ($i=0; $i <= $N; $i++) { 
                $s=$s+$i;
                if ($s<=$vmax){
                    echo  "$s";
                }else{
                    echo "imposible";
                }
                   
                   
                }
            }     
       ?>
</body>

</html>