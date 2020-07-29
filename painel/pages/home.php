<?php 
	$usuariosOnline = Painel::listarUsuariosOnline();
?>
<div class="box-content left w100">
	<h2><i class="fa fa-home"></i> Painel de controle - <?php echo NOME_EMPRESA ?> </h2>
	<div class="box-metricas">
		<div class="box-metrica-single">
			<div class="box-metrica-wrapper">
				<h2>Usuários Onlines</h2>
				<p><?php echo count($usuariosOnline); ?></p>
			</div><!--box-metrica-wrapper-->
		</div><!--box-metrica-single-->
		<div class="box-metrica-single">
			<div class="box-metrica-wrapper">
				<h2>Total de Visitas</h2>
				<p>100</p>
			</div><!--box-metrica-wrapper-->
		</div><!--box-metrica-single-->
		<div class="box-metrica-single">
			<div class="box-metrica-wrapper">
				<h2>Visitas Hoje</h2>
				<p>3</p>
			</div><!--box-metrica-wrapper-->
		</div><!--box-metrica-single-->
		<div class="clear"></div><!--clear-->
	</div><!--box-metricas-->
</div><!--box-content-->
<div class="clear"></div><!--clear-->
<div class="box-content w100">
	<h2><i class="fa fa-rocket"></i> Usuários Onlines</h2>
	<div class="table-responsive">
		<div class="row">
			<div class="col">
				<span>IP</span>
			</div><!--col-->
			<div class="col">
				<span>Última Ação</span>
			</div><!--col-->
			<div class="clear"></div>
		</div><!--row-->
		<?php for($i = 0; $i < 1; $i++) { ?>
		<div class="row">
			<div class="col">
				<span>199.199.199.199</span>
			</div><!--col-->
			<div class="col">
				<span>26/06/2020 19:00:00</span>
			</div><!--col-->
			<div class="clear"></div>
		</div><!--row-->
		<?php } ?>
	</div><!--table-responsive-->
</div><!--box-content-->