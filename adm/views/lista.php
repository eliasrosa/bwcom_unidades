<?

defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);
echo bwButton::redirect('Criar nova unidade', '/unidades/cadastro/0');

function grid_col0($i)
{
    return '<a href="' . $i->getUrl('/unidades/cadastro') . '">' . $i->id . '</a>';
}

function grid_col1($i)
{
    $src = $i->bwImagem->default->resize(100, 100);
    return sprintf('<img src="%s" />', $src);
}

function grid_col2($i)
{
    return $i->cidade;
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

