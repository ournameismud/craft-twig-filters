<?php
namespace Craft;

class MudFiltersPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Mud Filters');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Dave Stockley';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/magicspon';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.mudfilters.twigextensions.MudFiltersTwigExtension');

        return new MudFiltersTwigExtension();
    }
}
