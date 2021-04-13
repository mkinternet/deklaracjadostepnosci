<?php namespace Mkinternet\Deklaracjadostepnosci;

use Backend;
use System\Classes\PluginBase;

/**
 * Deklaracjadostepnosci Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Deklaracjadostepnosci',
            'description' => 'No description provided yet...',
            'author'      => 'Mkinternet',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Mkinternet\Deklaracjadostepnosci\Components\Deklaracjadostepnosci' => 'Deklaracjadostepnosci',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'mkinternet.deklaracjadostepnosci.settings' => [
                'tab' => 'Deklaracjadostepnosci',
                'label' => 'Ustawienia deklaracji dostpępności'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'deklaracjadostepnosci' => [
                'label'       => 'Deklaracjadostepnosci',
                'url'         => Backend::url('mkinternet/deklaracjadostepnosci/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['mkinternet.deklaracjadostepnosci.*'],
                'order'       => 500,
            ],
        ];
    }
	
	
	public function registerSettings()
	{
		return [
			'settings' => [
				'label'       => 'Deklaracja dostępności ustawienia',
				'description' => 'Deklaracja dostępności ustawienia.',
				'category'    => 'Deklaracja dostępności',
				'icon'        => 'icon-cog',
				'class'       => 'Mkinternet\Deklaracjadostepnosci\Models\Settings',
				'order'       => 500,
				'keywords'    => 'security location',
				'permissions' => ['mkinternet.deklaracjadostepnosci.ustawienia']
			]
		];
	}	
	
}
