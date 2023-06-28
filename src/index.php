<?php
$host = 'mysql_db';
$db = 'flowers';
$user = 'root';
$pass = 'toor';
$dsn = "mysql:host=$host;dbname=$db";
$con=new PDO($dsn, $user, $pass);
$sql='CALL GetFlori()';
$q=$con->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<table>
<tr>
<th>Nume</th>
<th>Culoare</th>
<th>Marime</th>
<th>Pret</th>
</tr>
<?php while ($res=$q->fetch()): ?>
<tr>
<td><?php echo $res['nume']; ?></td>
<td><?php echo $res['culoare']; ?></td>
<td><?php echo $res['marime']; ?></td>
<td><?php echo $res['pret']; ?></td>
</tr>
<?php endwhile; ?>
</table>