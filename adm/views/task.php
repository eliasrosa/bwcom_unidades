<?
defined('BW') or die("Acesso negado!");

//
$task = bwRequest::getVar('task');


if ($task == 'salvar')
{
    $r = Unidade::salvar(bwRequest::getVar('dados', array()));       
}

if ($task == 'remover')
{
    $r = Unidade::remover(bwRequest::getVar('dados', array()));
    $r['redirect'] = bwRouter::_("/unidades/lista");
}

die(json_encode($r));
?>
