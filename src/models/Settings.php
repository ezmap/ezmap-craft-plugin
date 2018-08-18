<?php
/**
 * EZMap plugin for Craft CMS 3.x
 * EZMap integration for Craft CMS
 *
 * @link      https://billyfagan.co.uk
 * @copyright Copyright (c) 2018 Billy Fagan
 */

namespace billythekid\ezmap\models;

use billythekid\ezmap\EZMap;

use Craft;
use craft\base\Model;

/**
 * EZMap Settings Model
 * This is a model used to define the plugin's settings.
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Billy Fagan
 * @package   EZMap
 * @since     1.0.0
 */
class Settings extends Model
{
  // Public Properties
  // =========================================================================

  /**
   * Some field model attribute
   *
   * @var string
   */
  public $ezmapEmail = '';
  public $ezmapApiKey = '';

  // Public Methods
  // =========================================================================

  /**
   * Returns the validation rules for attributes.
   * Validation rules are used by [[validate()]] to check if attribute values are valid.
   * Child classes may override this method to declare different validation rules.
   * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
   *
   * @return array
   */
  public function rules()
  {
    return [
        ['ezmapEmail', 'string'],
        ['ezmapEmail', 'default', 'value' => ''],
        ['ezmapApiKey', 'string'],
        ['ezmapApiKey', 'default', 'value' => ''],
    ];
  }
}