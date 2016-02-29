<?php

namespace Drupal\dino_roar\Controller;
use Symfony\Component\HttpFoundation\Response;
use Drupal\dino_roar\Service\ServiceCustom;
class RoarController {
  public function roar($count){
    $getcount = new ServiceCustom();
    $number = $getcount->getService($count);
    return new Response($number);
  }
}
