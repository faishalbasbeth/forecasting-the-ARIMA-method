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

    $B = array();
    $B[0] = $_POST['B11'];
    $B[1] = $_POST['B21'];

    $C = array();
    $C[0] = ($A[0]*$B[0])+($A[1]*$B[1]);
    $C[1] = ($A[2]*$B[0])+($A[3]*$B[1]);

    $t=($C[0]+($C[1]*20000))+0;
    ?>

    <table border="1" align="center" width="200" >
    <?php
    echo "$t";
    echo "<tr>";
    for($k=0; $k<=0; $k+=1)
    {
        echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=1; $k<=1; $k+=1)
    {
         echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    ?>
    </table>
</body>
</html>