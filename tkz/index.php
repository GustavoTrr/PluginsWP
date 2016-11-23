<?php
/*
Plugin Name: Meu Primeiro Plugin WP	
Description: Meu Primeiro Shortcode
Version: 0.1
Author: Gu & TekZoom
Author URI: http://www.tekzoom.com.br
*/	
	
	function criacao_form(){
?>
<form action="">
	Nome: <input type="text" name="nome"><br/>
	Mensagem: <textarea name="mensagem">Sua mensagem aqui...</textarea>
	</form>
	
	<?php 
		}
		//aqui abaixo criamos o "shortcode" que é justamente a definição do nome que o usuário irá chamar para acessar esta função nas páginas desejadas. Ex.: [formulario]
		add_shortcode('formulario','criacao_form'); 
		
		//Importante lembrar de ativar o plugin no wordpress e chamá-lo via shortcode
		?>
		
		