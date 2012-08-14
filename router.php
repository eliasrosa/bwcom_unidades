<?

defined('BW') or die("Acesso negado!");

bwRouter::addUrl('/unidades');
bwRouter::addUrl('/unidades/task', array('type' => 'task'));
bwRouter::addUrl('/unidades/lista');
bwRouter::addUrl('/unidades/cadastro/:id', array('fields' => array('id')));
