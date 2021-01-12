<?php


namespace Drupal\siteinformation\Controller;

use Drupal\Core\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class PageJSONController extends Controller\ControllerBase
{
  public function jsonContent($siteKeyApi, $nodeId){
    // Site API Key configuration value
    $site_api_key_saved = \Drupal::config('siteapikey.configuration')->get('siteapikey');

    // Node load
    $node = \Drupal::entityTypeManager()->getStorage('node')->load($nodeId);

    // Make sure the supplied node is a page, the configuration key is set and matches the supplied key
    if($node->getType() == 'page' && $site_api_key_saved != 'No API Key Yet' && $site_api_key_saved == $siteKeyApi){

      // Respond with the json representation of the node
      return new JsonResponse($node->toArray(), 200, ['Content-Type'=> 'application/json']);
    }

    // Respond with access denied
    return new JsonResponse(array("error" => "access denied"), 401, ['Content-Type'=> 'application/json']);
  }
}
