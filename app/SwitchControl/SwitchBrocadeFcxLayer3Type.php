<?php

namespace Packages\SwitchBrocadeFcxLayer3\App\SwitchControl;

use App\Hub\Type\Brocade\BrocadeType;

class SwitchBrocadeFcxLayer3Type extends BrocadeType
{
    const SLUG = 'brocade-fcx-layer3';

    /**
     * Must be unique across all of SynergyCP. This is what's stored in the database.
     *
     * @example dell-networking
     * @example brocade-fcx-layer3
     * @return string
     */
    public function getSlug()
    {
        return static::SLUG;
    }

    /**
     * Must be the key to a language array that includes at least 'name'.
     *
     * @example ssh.dell
     * @return string
     */
    public function getLang()
    {
        return 'pkg.switch-brocade-fcx-layer3::commands';
    }

    public function getFormatter()
    {
        return SwitchBrocadeFcxLayer3Format::class;
    }
}
