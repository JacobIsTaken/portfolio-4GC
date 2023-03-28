<?php
    $con = mysqli_connect('10.10.10.24','4gc', '4gc', '4gd_automat');
    $query = mysqli_query($con, "select * from automat;");
    $fetched_data = mysqli_fetch_all($query);
    echo $fetched_data[0];
    echo $fetched_data[1];
    echo $fetched_data[2];

    $query2 = mysqli_query($con, "insert automat values(NULL,'JZ','jabłecznik');");
    // $query3 = mysqli_query($con, "DELETE from automat where id=43");
    echo $query3;
?>
<?php
    mysqli_close($con);
?>