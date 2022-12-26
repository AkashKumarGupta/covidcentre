<?php

namespace Drupal\covid_custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

/**
 * Provides a controller with a simple text.
 */
class UpdateCovidCentre extends ControllerBase {
  function updateCentre(Request $request) {
    $response = array();
    $status = 0;
    $message = '';

    $centre_nid = $request->get('covid_nid');
    $user_id = \Drupal::currentUser()->id();

    if(!empty($centre_nid) && !empty($user_id)) {
      $user = User::load($user_id);
      // add centre in the user account
      $user->set('field_center', $centre_nid);
      $user->save();

      // update the slots after registering for Covid vaccination
      $node = Node::load($centre_nid);
      $slots = $node->get('field_available_slots')->value;
      $updated_slots = intval($slots) - 1;
      $node->set('field_available_slots', $updated_slots);
      $node->save();

      $status = 1;
    } else {
      $message = 'Unable to register for Covid. Please try after sometime.';
    }

    $response['status'] = $status;
    $response['message'] = $message;

    return new JsonResponse($response);
  }
}
