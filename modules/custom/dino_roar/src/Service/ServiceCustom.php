<?php

namespace Drupal\dino_roar\Service;

class ServiceCustom {
  public function getService($lengt){
    return 'R'.str_repeat('0', $lengt).'AR!';
  }
}
