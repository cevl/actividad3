<?php
    $user = "cesar_vasquez"; 
    $password = "1162331";
    $ODBCConnection = odbc_connect("DRIVER={Devart ODBC Driver for PostgreSQL};Server=db;Database=cesar_vasquez;Port=5432;String Types=Unicode", $user, $password);

    $SQLQuery = "SELECT * FROM autotest.dept";
    $RecordSet = odbc_exec($ODBCConnection, $SQLQuery);

   while (odbc_fetch_row($RecordSet)) {
        $result = odbc_result_all($RecordSet, "border=1");
    }
    odbc_close($ODBCConnection);
?>  
