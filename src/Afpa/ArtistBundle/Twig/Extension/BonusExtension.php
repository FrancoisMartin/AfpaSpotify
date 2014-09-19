<?php

namespace Afpa\ArtistBundle\Twig\Extension;
 
class BonusExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'bonus' => new \Twig_Filter_Method($this, 'add_bonus')
        );
    }
 
    public function add_bonus($value)
    {
        $value += 10;
        if($value > 100) $value = 100;

        return $value;
    }
 
    public function getName()
    {
        return 'bonus_extension';
    }
 
}