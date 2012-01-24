<?
defined('BW') or die("Acesso negado!");

// UNIDADE
/////////////////////////////////////////////////////////////
if ($task == 'salvarUnidade')
{
    $r = Unidade::salvar(bwRequest::getVar('dados', array()));       
}

if ($task == 'removerUnidade')
{
    $r = Unidade::remover(bwRequest::getVar('dados', array()));
    $r['redirect'] = bwRouter::_("adm.php?com=unidades&view=lista");
}

die(json_encode($r));
?>
