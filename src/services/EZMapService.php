<?php
/**
 * EZMap plugin for Craft CMS 3.x
 *
 * EZMap integration for Craft CMS
 *
 * @link      https://billyfagan.co.uk
 * @copyright Copyright (c) 2018 Billy Fagan
 */

namespace billythekid\ezmap\services;

use billythekid\ezmap\EZMap;

use Craft;
use craft\base\Component;

/**
 * EZMapService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Billy Fagan
 * @package   EZMap
 * @since     1.0.0
 */
class EZMapService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     EZMap::$plugin->eZMapService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (EZMap::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
