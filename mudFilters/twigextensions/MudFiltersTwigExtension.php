<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class MudFiltersTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'MudFilters';
    }

    public function getFilters()
    {
        return array(
            'img' => new Twig_Filter_Method($this, 'img'),
        );
    }

    public function img($input, $size = '800x600')
    {
				if($input) {
					return $input;
				};
				
				$output = 'https://source.unsplash.com/random/' . $size;

        return $output;
    }
}
