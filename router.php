<?
defined('BW') or die("Acesso negado!");

function unidadesBuildRoute( &$query )
{
    $segments = array();    
    return $segments;
}

function unidadesParseRoute( $segments )
{
    $vars = array();
    
    if(count($segments))
    {
        $vars['id'] = $segments[0];     
        $vars['alias'] = $segments[1];      
    }
    
    return $vars;   
}
?>