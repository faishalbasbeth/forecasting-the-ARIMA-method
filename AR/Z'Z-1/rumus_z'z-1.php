<html>
<head>
<title>Perkalian Matriks</title>
</head>
<body>
    <?php
    $A = array();
    $A[0] = $_POST['A11'];
    $A[1] = $_POST['A12'];
    $A[2] = $_POST['A21'];
    $A[3] = $_POST['A22'];

    $C = array();
    $C[0] = $A[3];
    $C[1] = ($A[1]*(-1));
    $C[2] = ($A[2]*(-1));
    $C[3] = $A[0];

    $invers = 1/(($C[3]*$C[0])-($C[1]*$C[2]));

    $Ct[0] = ($A[3]*$invers);
    $Ct[1] = (($A[1]*(-1))*$invers);
    $Ct[2] = (($A[2]*(-1))*$invers);
    $Ct[3] = ($A[0]*$invers);
    ?>

    <table border="1" align="center" width="200" >
    <?php
    echo "<tr>";
    for($k=0; $k<=1; $k+=1)
    {
        echo "<td>$Ct[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=2; $k<=3; $k+=1)
    {
         echo "<td>$Ct[$k]</td>";
    }
    echo "</tr><tr>";
    ?>
    </table>
</body>
</html>