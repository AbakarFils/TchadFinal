<div class="modal fade" id="<?php echo $formalite->idF ?>" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Demande de <?php echo $formalite->libF ?></h4>
			</div>
			<div class="modal-body">
				<ul class="list-group">
					<?php
						require_once  '../Admin/model/appartenirDB.php';
						require_once  '../Admin/model/pieceDb.php';
					
						$idis =  $db->query(getPieceByFormalite($formalite->idF));
						$ids = $idis->fetchAll();
						foreach ($ids as $p )
						{
							$pieces =$db->query(getPieceById($p->idP ));
							$piece = $pieces->fetchAll();
							foreach ($piece as $p) {
							echo "<li class='list-group-item'>". $p->libP."</li>";
							}
						}
						
					?>
					<!------------Perte Formalite!-----------------!-->
					<div id="perte" class="collapse">
						<ul class="list-group">
							
							<li class="list-group-item">Cerificat de perte du passeport (police) en cas de perte</li>
							
						</ul>
					</div>
					<!------------Fin Perte !-------------------------->
				</ul>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>