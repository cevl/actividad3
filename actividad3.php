<?php
    $user = "cesar_vasquez"; 
    $password = "1162331";
    $ODBCConnection = odbc_connect("DRIVER={Devart ODBC Driver for PostgreSQL};Server=db;Database=cesar_vasquez;Port=5432;String Types=Unicode", $user, $password);

    $SQLQuery = "SELECT * FROM Ejemplo";
    $RecordSet = odbc_exec($ODBCConnection, $SQLQuery);
?>
<table class="table table-bordered">
    <thead><tr><th>S.N</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Matricula</th>
    </thead>
    <tbody>
<?php
   while (odbc_fetch_row($RecordSet)) {
        $result = odbc_result_all($RecordSet, "border=1");
?>
         <tr>
             <td><?php echo $sn; ?></td>
             <td><?php echo $data['nombre']??''; ?></td>
             <td><?php echo $data['apellido']??''; ?></td>
             <td><?php echo $data['matricula']??''; ?></td>
        </tr>
<?php
    }
    odbc_close($ODBCConnection);
?>  
