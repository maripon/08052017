<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city, country'].', '.$datos['data']['location']['country']);?>:</h5>

<p>El Kit está instalado en: </p>
  <strong><?php echo ($datos["location"]["city"]);?>
<p>La temperatura es: </p>
  <strong><?php echo round($datos["data"]["sensors"][0]) ?>
<p>La humedad es: </p>
<p>La iluminación es: </p>

<pre><?php print_r($datos)?></pre>

<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los indicadores generados por los sensores del <?php echo('Smart Citizen Kit '.$datos['id']);?>.</p>
</div>

</section>
<?php include('footer.php');?>
