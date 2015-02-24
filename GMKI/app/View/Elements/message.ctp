<!-- Div pour les message -->
<div class="row">
	<div class="col-md-3"></div>
    <div class="col-md-6">
    	<div class="alert alert-<?= $type; ?>"><?= $message; ?></div>
    </div>
	<div class="col-md-3"></div>
</div>

<?php 
/*
 * Different type de message
 * 
 * alert-success
 * alert-info
 * alert-warning
 * alert-danger
 * 
 * */
?>