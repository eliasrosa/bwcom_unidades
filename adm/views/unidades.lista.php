<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);
echo bwButton::redirect('Criar nova unidade', 'adm.php?com=unidades&view=cadastro');

function grid_col0($i)
{
    return $i->id;
}

function grid_col1($i)
{
    $src = $i->bwImagem->getUrlResize('width=100&height=100');
    return sprintf('<img src="%s" />', $src);
}

function grid_col2($i)
{
    return '<a href="' . bwRouter::_('adm.php?com=unidades&view=cadastro&id=' . $i->id) . '">'.$i->cidade.'</a>';
}

function grid_col3($i)
{
    return $i->telefone;
}

function grid_col4($i)
{
    return $i->endereco;
}

function grid_col5($i)
{
    return bwAdm::getImgStatus($i->status);
}

$a = new bwGrid();
$a->setQuery(Doctrine_Query::create()->from('Unidade'));
$a->addCol('ID', 'id', 'tac', 50);
$a->addCol('Imagem', NULL, 'tac', 100);
$a->addCol('Cidade', 'cidade', NULL, 200);
$a->addCol('Telefone', NULL, NULL, 200);
$a->addCol('Endereço', 'endereco', NULL);
$a->addCol('Status', 'status', 'tac', 25);
$a->show();
?>

