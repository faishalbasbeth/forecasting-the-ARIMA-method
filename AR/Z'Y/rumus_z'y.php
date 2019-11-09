<html>
<head>
<title>Perkalian Matriks</title>
</head>
<body>
    <?php
    $A = array();
    $A[0] = $_POST['A11'];
    $A[1] = $_POST['A12'];
    $A[2] = $_POST['A13'];
    $A[3] = $_POST['A14'];
    $A[4] = $_POST['A15'];
    $A[5] = $_POST['A21'];
    $A[6] = $_POST['A22'];
    $A[7] = $_POST['A23'];
    $A[8] = $_POST['A24'];
    $A[9] = $_POST['A25'];

    $B = array();
    $B[0] = $_POST['B11'];
    $B[1] = $_POST['B12'];
    $B[2] = $_POST['B13'];
    $B[3] = $_POST['B14'];
    $B[4] = $_POST['B15'];

    $C = array();
    $C[0] = ($A[0]*$B[0])+($A[1]*$B[1])+($A[2]*$B[2])+($A[3]*$B[3])+($A[4]*$B[4]);
    $C[1] = ($A[5]*$B[0])+($A[6]*$B[1])+($A[7]*$B[2])+($A[8]*$B[3])+($A[9]*$B[4]);
    ?>

    <table border="1" align="center" width="200" >
    <?php
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