<?php 
session_start();
function mostraAlerta($tipo){
	if(isset($_SESSION[$tipo])){
?>
	<p class ="mostra-alerta" class="text-<?=$tipo?>"><?=$_SESSION[$tipo]?></p>
<?php
	unset($_SESSION["$tipo"]);
	}
}
?>