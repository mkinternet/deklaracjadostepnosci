<?php namespace Mkinternet\Deklaracjadostepnosci\Components;

use Cms\Classes\ComponentBase;
use Mkinternet\Deklaracjadostepnosci\Models\Settings;

class Deklaracjadostepnosci extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Deklaracjadostepnosci Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
		$this->page['dd']  = Settings::instance()->toArray();
		
		
		
		$this->page['statuszgodnosci'] = [
				'Zgodna',
				'Częściowo zgodna',
				'Niezgodna'
			];
		

		$test = [];
		
        return [];
    }
}
