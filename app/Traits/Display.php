<?php

namespace App\Traits;

use App\Classes\Journey;


trait Display
{
  public function show($view)
  {
    $current = Journey::current();
    if ($current->agent->isMobile()) {
      return "web.mobile.$view";
    }
    return "web.$view";
  }
}
