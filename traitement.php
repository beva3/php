<?php
    session_start();    
    $valA = $_GET["val_a"];
    $valB = $_GET["val_b"];
    $valA_modif = $_POST["val_a_modif"];
    $valB_modif = $_POST["val_b_modif"];
    $index_modif=$_POST["index_modif"];
    $index = 0;
    $valB = $_SESSION['valB'];
    if($index_modif!=''){
        $tabA = $_SESSION['tabA'];
        $tabA[$index_modif] = $valA_modif; 
        $tabB = $_SESSION['tabB'];
        $tabB[$index_modif] = $valB_modif;
        $_SESSION['tabA'] = $tabA;
        $_SESSION['tabB'] = $tabB;
    }
    else{
        for($i = 1 ; $i <=$valB ; $i++){
            $tabA[$index] = $valA;
            $tabB[$index] = $i;
            $index++;
        }
        $_SESSION['valB'] = $valB;
        $_SESSION['tabA'] = $tabA;
        $_SESSION['tabB'] = $tabB;        
    }
    echo "<h1>table de multiplication</h1>";
    
    echo "<table class = \"tableau\">";

    $index = 0;
    for($i = 1 ; $i <= $valB ; $i++){
        $produitAB = $tabA[$index] * $tabB[$index];
        
        if($i%2 ==0 ){
            echo "
                <tr style=\"background-color:blue;color:white;\">
                    <td>$tabA[$index]   </td>
                    <td>$tabB[$index]   </td>
                    <td>$produitAB</td>
                    <td>
                        <a href=\"http://localhost/php/resetData.php?index=$index\">
                            <button>modifier</button>
                        </a>
                    </td>
                    <td>delete</td>
                </tr>
            "; 
        }else{
            echo "
                <tr style=\"background-color:green;color:white;\">
                    <td>$tabA[$index]   </td>
                    <td>$tabB[$index]   </td>
                    <td>$produitAB</td>
                    <td>
                        <a href=\"http://localhost/php/resetData.php?index=$index\">
                            <button>modifier</button>
                        </a>
                    </td>
                    <td>delete</td>
                </tr>
            "; 
        }
        $index++;
    }
    echo "</table>";
?>