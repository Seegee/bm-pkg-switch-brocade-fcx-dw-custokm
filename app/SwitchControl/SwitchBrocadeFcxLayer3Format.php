<?php

namespace Packages\SwitchBrocadeFcxLayer3\App\SwitchControl;

use App\Hub\Type\Brocade\BrocadeFormat;

class SwitchBrocadeFcxLayer3Format extends BrocadeFormat
{
    protected $lang = 'pkg.switch-brocade-fcx-layer3::commands';

    /**
     * Convert speed from an integer in mbps to the format used by the switch.
     *
     * @param int $speed
     *
     * @return string
     */
    public function portSpeed($speed): string
    {
        switch ($speed) {
            case 0:
                return 'auto';
            case 1000:
                return sprintf('%d-full-master', $speed);
            case 10000:
                return '10g-full';
            default:
                return sprintf('%d-full', $speed);
        }
    }
}
