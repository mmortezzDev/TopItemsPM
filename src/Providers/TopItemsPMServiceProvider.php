<?php
/**
 * TopItemsPMServiceProvider
 */

namespace TopItemsPM\Providers;

use Plenty\Plugin\ServiceProvider;

class TopItemsPMServiceProvider extends ServiceProvider
{
    public function register() {

        $this->getApplication()->register(TopItemsPMRouteServiceProvider::class);

    }
}