<?php

namespace Afpa\ArtistBundle\Twig\Extension;
 
class PositifExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'positif' => new \Twig_Filter_Method($this, 'auto_positive')
        );
    }
 
    public function auto_positive($value, $type = 'standard')
    {
        switch ($type) {
        	case 'fort':
        		$value .= " c'est INCROYABE !";
        		break;
        	
        	default:
        		$value = $value." c'est top !";
        		break;
        }
        return $value;
    }
 
    public function getName()
    {
        return 'positif_extension';
    }
 
}