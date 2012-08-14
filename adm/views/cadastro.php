<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);

$id = bwRequest::getInt('id');
$i = bwComponent::openById('Unidade', $id);

$form = new bwForm($i, '/unidades/task');
$form->addH2('Dados da unidade');
$form->addInputID();
$form->addInput('cidade');
$form->addInput('endereco');
$form->addInput('telefone', 'text', array('rel'=>'phone', 'class' => 'w50'));
$form->addStatus();
$form->addInputFileImg();

$form->addBottonSalvar('salvar');
$form->addBottonRemover('remover');
$form->show();
?>
