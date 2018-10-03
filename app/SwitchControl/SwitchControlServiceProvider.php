<?php

namespace Packages\SwitchBrocadeFcxLayer3\App\SwitchControl;

use App\Support\ServiceProvider;
use App\Hub\Type\TypeService;

class SwitchControlServiceProvider
extends ServiceProvider
{
    /**
     * @var string
     */
    protected $package = 'switch-brocade-fcx-layer3';

    protected $providers = [
    ];

    public function boot(TypeService $type)
    {
        $this->loadTranslationsFrom(
            $this->basePath() . '/resources/lang',
            'pkg.' . $this->folder()
        );

        $type->add(new SwitchBrocadeFcxLayer3Type());
    }

    /**
     * @return string
     */
    protected function basePath()
    {
        return sprintf(
            '%s/packages/%s',
            $this->app->basePath(),
            $this->folder()
        );
    }

    /**
     * @return string
     */
    protected function folder()
    {
        return $this->package;
    }
}
