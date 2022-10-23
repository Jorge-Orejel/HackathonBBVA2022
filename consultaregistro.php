<?php
include ('include/conn.php');
$usuario = 2;

$consultanombre = "SELECT * FROM `usuarios` WHERE ID = $usuario";
$resultnombre=mysqli_query($conn,$consultanombre);
    foreach($resultnombre as $row2){
        $nombre = $row2['name'];
        echo "Hola ".$nombre;  
    }

$consulta = "SELECT * FROM `rel_user_product` WHERE usuarios_ID = $usuario";
$result=mysqli_query($conn,$consulta);
?>   
    <br>
     <table>
     <tr>Productos</tr>
<?php
foreach($result as $row){
    $productos_ID = $row['productos_ID'];
    $consultproducto = "SELECT * FROM `productos` WHERE ID = $productos_ID";
    $resultproducto=mysqli_query($conn,$consultproducto); 
    foreach($resultproducto as $row){
        $nomproductos = $row['name']; ?>
    <tr>
        <td> <?php echo $nomproductos; ?> </td>
    </tr> 
    <?php } ?>
    </table> 
<?php
}

$consultproducto = "SELECT * FROM `productos`";
    $resultproducto=mysqli_query($conn,$consultproducto); 
    foreach($resultproducto as $row){
        $nomproductos = $row['name'];
        $img = $row['photo'];
        $w = $row['w'];
        $resultw = ($w/1000) * 0.41;
?>
<div class="table-row">
	<div class="serial"><? echo $nomproductos; ?></div>
	<div class="country"> <img src="assets/img/elements/<? echo $img; ?>" alt="flag"></div>
	<div class="visit"><? echo $resultw; ?> </div>
	<div class="visit">0,02 kg/h</div>
		<div class="percentage">
			<div class="progress">
		    <div class="progress-bar color-1" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
			</div>
	    </div>
		<div class="serial"><input type="checkbox" id="vehicle1" name="vehicle1" value=""></div>
</div>
<?php
    }
?>