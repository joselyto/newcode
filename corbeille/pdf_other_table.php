<form action="pdf_other.php">
<input type="text" name="id1">
<input type="submit" name="pdf" id="pdf" Value="PDF" >
</form>

<table>
    <tr>
    <th>id</th>
    <th>id</th>
    <th>Libelle</th>
    </tr>
    <?php
        include 'BDD/bdd_for_export.php';
        $select = "SELECT * FROM zone_sante";
        $query = mysqli_query($conn, $select);
        while($row = mysqli_fetch_array($query)){

    ?>
    <tr>
        <td><?php echo $row['id_zs']; ?></td>
        <td><?php echo $row['id_dps']; ?></td>
        <td><?php echo $row['libelle']; ?></td>
        
    </tr>

    <?php 
    }
    ?>

</table>

<form action="pdf_other.php">
<input type="submit" name="pdf" id="pdf" Value="PDF" >
</form>