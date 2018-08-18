<?php
/**
 * EZMap plugin for Craft CMS 3.x
 * EZMap integration for Craft CMS
 *
 * @link      https://billyfagan.co.uk
 * @copyright Copyright (c) 2018 Billy Fagan
 */

namespace billythekid\ezmap\variables;

use billythekid\ezmap\EZMap;

use Craft;
use craft\helpers\Template;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * EZMap Variable
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.eZMap }}).
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Billy Fagan
 * @package   EZMap
 * @since     1.0.0
 */
class EZMapVariable
{
  // Public Methods
  // =========================================================================

  /**
   * Whatever you want to output to a Twig template can go into a Variable method.
   * You can have as many variable functions as you want.  From any Twig template,
   * call it like this:
   *     {{ craft.eZMap.exampleVariable }}
   * Or, if your variable requires parameters from Twig:
   *     {{ craft.eZMap.exampleVariable(twigValue) }}
   *
   * @param null $optional
   * @return string
   */
  public function exampleVariable($optional = null)
  {
    $result = "And away we go to the Twig template...";
    if ($optional)
    {
      $result = "I'm feeling optional today...";
    }

    return $result;
  }

  public function getMaps()
  {
    //api/{email}/{apikey}/getmaps

    $email  = EZMap::getInstance()->settings->ezmapEmail;
    $apiKey = EZMap::getInstance()->settings->ezmapApiKey;
    $url    = "https://ezmap.co/api/{$email}/{$apiKey}/getmaps";

    $client = new Client();

    try
    {
      $response       = [];
      $clientResponse = $client->request('POST', $url);
      $maps           = json_decode($clientResponse->getBody());
      foreach ($maps as $map)
      {
        $response[] = [
            'value' => $map->id,
            'label' => $map->title,
        ];
      }

      return $response;
    } catch (GuzzleException $e)
    {
      return false;
    }
  }

  public function getMap($mapId)
  {
    //api/{email}/{apikey}/getmapcode/{map}
    $email  = EZMap::getInstance()->settings->ezmapEmail;
    $apiKey = EZMap::getInstance()->settings->ezmapApiKey;
    $url    = "https://ezmap.co/api/{$email}/{$apiKey}/getmapcode/$mapId";

    $client = new Client();

    try
    {
      $clientResponse = $client->request('POST', $url);

      return Template::raw($clientResponse->getBody());
    } catch (GuzzleException $e)
    {
      return false;
    }
  }
}
