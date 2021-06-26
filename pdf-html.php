<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
							<thead>
								<tr>
									<th>N°</th>
									<th>Nom</th>
									<th>Libelle</th>
									
								</tr>
							</thead>
							<tbody>
                                <?php foreach($ligne as $lign): ?>
								<tr>
									<td><?php $lign['id_zs'] ?></td>
                                    <td><?php $lign['id_dps'] ?></td>
									<td><?php $lign['libelle'] ?></td>
								</tr>
                                <?php endforeach ?>
							</tbody>
						</table>
</body>
</html>
			
