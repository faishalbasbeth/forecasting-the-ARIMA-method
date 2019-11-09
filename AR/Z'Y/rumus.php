<html>
<head>
<title>Perkalian Matriks</title>
</head>
<body>
    <h2 align="center">Perkalian Matriks Ordo 3x3</h2>
    <P>Kunjungi spirit221.blogspot.com</p>
    <?php
    $A = array();
    $A[0] = $_POST['A11'];
    $A[1] = $_POST['A12'];
    $A[2] = $_POST['A13'];
    $A[3] = $_POST['A21'];
    $A[4] = $_POST['A22'];
    $A[5] = $_POST['A23'];
    $A[6] = $_POST['A31'];
    $A[7] = $_POST['A32'];
    $A[8] = $_POST['A33'];

    $B = array();
    $B[0] = $_POST['B11'];
    $B[1] = $_POST['B12'];
    $B[2] = $_POST['B13'];
    $B[3] = $_POST['B21'];
    $B[4] = $_POST['B22'];
    $B[5] = $_POST['B23'];
    $B[6] = $_POST['B31'];
    $B[7] = $_POST['B32'];
    $B[8] = $_POST['B33'];

    $C = array();
    $C[0] = ($A[0]*$B[0])+($A[1]*$B[3])+($A[2]*$B[6]);
    $C[1] = ($A[0]*$B[1])+($A[1]*$B[4])+($A[2]*$B[7]);
    $C[2] = ($A[0]*$B[2])+($A[1]*$B[5])+($A[2]*$B[8]);
    $C[3] = ($A[3]*$B[0])+($A[4]*$B[3])+($A[5]*$B[6]);
    $C[4] = ($A[3]*$B[1])+($A[4]*$B[4])+($A[5]*$B[7]);
    $C[5] = ($A[3]*$B[2])+($A[4]*$B[5])+($A[5]*$B[8]);
    $C[6] = ($A[6]*$B[0])+($A[7]*$B[3])+($A[8]*$B[6]);
    $C[7] = ($A[6]*$B[1])+($A[7]*$B[4])+($A[8]*$B[7]);
    $C[8] = ($A[6]*$B[2])+($A[7]*$B[5])+($A[8]*$B[8]);
    ?>

    <table border="1" align="center" width="200" >
    <?php
    echo "<tr>";
    for($k=0; $k<=2; $k+=1)
    {
        echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=3; $k<=5; $k+=1)
    {
         echo "<td>$C[$k]</td>";
    }
    echo "</tr><tr>";
    for($k=6; $k<=8; $k+=1)
    {
         echo "<td>$C[$k]</td>";
    }
    echo "</tr>";
    ?>
    </table>
</body>
</html>