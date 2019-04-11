<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../icones/icons8_Pizza_24px.png" type="icone/png">
    <script src="js/main.js"></script>
    
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/pp.css">
    <script src="../js/calc.js"></script>
   
    <link rel="stylesheet" href="../css/calculator.css">
    <title>Document</title>
    <style>
        body{
            background-image:url('../images/bg003.jpg');
            background-size:cover;
            background-repeat:no-repeat;
            padding-top:90px;
        }
    </style>
   
</head>
<body>

<?php
$Message=0;
$rep;
if(isset($_POST['n1']) and isset($_POST['n2']) and isset($_POST['bt']) and isset($_POST['operateur'])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $op=$_POST['operateur'];
    $rep;
    
 
    if(isset($_POST['bt'])){
        
        if(empty($n1)){ $Message="'Les Champs doivent etre emplis'";}
        if(is_numeric($n1) and is_numeric($n2)){
          
            switch($op){
                case '+': $Message=$n1+$n2;
                //echo'le resultat de '.$n1. ' + ' .$n2.  ' est '.$Message;
                break;
                case '-':$Message=$n1-$n2;
               // echo'le resultat de '.$n1. ' - ' .$n2.  ' est '.$Message;
                break;
                case '*':$Message=$n1*$n2;
                //echo'le resultat de '.$n1. ' * ' .$n2.  ' est '.$Message;
                break;
                case '/':
                if($_POST['n1']!=0 and $_POST['n2']==0){
                    $Message="'Operation Impossible'";
                }else{
                    $Message=$n1/$n2;
                }
                /*
                if($n2==0){
                   throw new Exception('Division par 0 impossible');
                }
                try{ 
                    $Message=$n1/$n2;
                   
                }catch(Exception $e){
                    $Message="'Division impossible'";
                }*/
                
                break;
            }
           
        }
        else{
            $Message="'Veuillez Verifier que vos deux valeurs sont numeric'";
           
        }
    }
}
?>
    

    <div class="pp">
    <div class="modal" id="ouv1">
        <div class="modc" >
            <div class="g">
                <a href="../index.html"><img src="../icones/icons8_Home_64px.png" alt="" ></a>
            
            </div>
       
            <div class="content con" >
                
                <center >Calculatrice</center></br>
                <form  method="POST">
                   
                    <input type="text" placeholder="Premier Nombre" class="btn" name="n1"  id="n1" >
                    
                    
                    <select name="operateur" id="op"  class="btn"  >
                        <option value="+">+</option >
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        </select>
                    
                    
                    <input type="text" placeholder="Deuxieme Nombre" class="btn"  name="n2"     id="n2">
                  
                   
                    <input type="text" placeholder="Cliquer sur calculer pour avoir le resultat" value=<?php echo $Message?> id="n3" class="btn"  readonly>
                          <?php $Message=0?>
                    <div class="ko">
                    
                        <input  type="reset"  class="btn q1" value="Effacer">
                       
                        <input type="submit" class="btn q2" name="bt" value="Calculer">
                    </div>
                   
                </form>
            </div>
            </div>
    </div>
    </div>
    
</br></br></br></br></br></br></br></br>



</body>
</html>
