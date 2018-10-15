<div class="col-md-3 menu">
<ul class="list-group">
<li class="list-group-item 
	<?php 
	if($url = str_replace("/views/", "", $_SERVER["REQUEST_URI"])=='home.php'){
	echo 'active';
	}?>">
<a href="home.php">Tarefas pendentes</a>
</li>
<li class="list-group-item
	<?php 
	if($url = str_replace("/views/", "", $_SERVER["REQUEST_URI"])=='nova_tarefa.php'){
	echo 'active';
	}?>">
<a href="nova_tarefa.php">Nova tarefa</a>
</li>
<li class="list-group-item
	<?php 
	if($url = str_replace("/views/", "", $_SERVER["REQUEST_URI"])=='todas_tarefas.php'){
	echo 'active';
	}?>">
<a href="todas_tarefas.php">Todas tarefas</a>
</li>
<li class="list-group-item"><a href="../user_controller.php?acao=logout">Sair</a></li>
</ul>
</div>