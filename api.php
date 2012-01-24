<?

defined('BW') or die("Acesso negado!");

class bwUnidades extends bwComponent
{
    // variaveis obrigatórias
    var $id = 'unidades';
    var $nome = 'Unidades';
    var $adm_url_default = 'adm.php?com=unidades&view=lista';
    var $adm_visivel = true;
    

    // getInstance
    function getInstance($class = false)
    {
        $class = $class ? $class : __CLASS__;
        return bwObject::getInstance($class);
    }
}
?>
