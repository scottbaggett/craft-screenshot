<?php
/**
 * Screenshotr plugin for Craft CMS 3.x
 *
 * Take screenshots of your routes and save them as assets
 *
 * @link      superformula.com
 * @copyright Copyright (c) 2018 Scott Baggett
 */

namespace superformula\screenshotr;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Screenshotr
 *
 * @author    Scott Baggett
 * @package   Screenshotr
 * @since     1
 *
 */
class Screenshotr extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Screenshotr
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'screenshotr',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
