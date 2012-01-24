<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);

$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('Unidade', $id);

$form = new bwForm($i);
$form->addH2('Dados da unidade');
$form->addInputID();
$form->addInput('cidade');
$form->addInput('endereco');
$form->addInput('telefone', 'text', array('rel'=>'phone', 'class' => 'w50'));
$form->addStatus();
$form->addInputFileImg();

$form->addBottonSalvar('salvarUnidade');
$form->addBottonRemover('removerUnidade');
$form->show();
?>
