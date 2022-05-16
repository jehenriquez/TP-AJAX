<?php
include_once('../../controller/leerDB.php');

$objEstado = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM estados WHERE descripcion like '" . $_POST["keyword"] . "%' ORDER BY descripcion LIMIT 5";
$result = $objEstado->runQuery($query);
if(!empty($result)) {
?>

<ul id="estados-list">
<?php
foreach($result as $estados) {
?>
<li style="list-style:none;" onClick="selectCountry('<?php echo $estados["descripcion"]; ?>');"><?php echo $estados["descripcion"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>