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
    $B[2] = $_POST['B21'];
    $B[3] = $_POST['B22'];
    $B[4] = $_POST['B31'];
    $B[5] = $_POST['B32'];
    $B[6] = $_POST['B41'];
    $B[7] = $_POST['B42'];
    $B[8] = $_POST['B51'];
    $B[9] = $_POST['B52'];

    $C = array();
    $C[0] = ($A[0]*$B[0])+($A[1]*$B[2])+($A[2]*$B[4])+($A[3]*$B[6])+($A[4]*$B[8]);
    $C[1] = ($A[0]*$B[1])+($A[1]*$B[3])+($A[2]*$B[5])+($A[3]*$B[7])+($A[4]*$B[9]);
    $C[2] = ($A[5]*$B[0])+($A[6]*$B[2])+($A[7]*$B[4])+($A[8]*$B[6])+($A[9]*$B[8]);
    $C[3] = ($A[5]*$B[1])+($A[6]*$B[3])+($A[7]*$B[5])+($A[8]*$B[7])+($A[9]*$B[9]);
    ?>

    <table border="1" align="center" width="200" >
    <?php
    echo "<tr>";
    for($k=0; $k<=1; $k+=1)
    {
        echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=2; $k<=3; $k+=1)
    {
         echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    ?>
    </table>
</body>
</html>