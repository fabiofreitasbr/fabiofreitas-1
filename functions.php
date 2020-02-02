<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(
	'email' => 'contato@fabiofreitas.com.br',
	
	'facebook' => 'https://www.facebook.com/FabioFreitasBR',
	'instagram' => 'http://instagram.com.br/fabiofreitasbr',
	'linkedin' => 'https://www.linkedin.com/in/fabiofreitasbr',
	'behance' => 'https://www.behance.net/fabiofreitasbr',

	'inicio' => 11,
	'sobre' => 14,
	'portfolio' => 18,
	'servicos' => 16,
	'contato' => 20,
);
InfoVar::save($argVar);
?>