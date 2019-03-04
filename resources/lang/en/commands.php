<?php

return [
    'name' => 'Brocade FCX Layer 3',
    'enable' => 'enable',
    'config' => 'config t',
    'set_interface_vlan' => [
        'vlan :vlan',
        'untagged eth :port',
        'router-interface ve :vlan',
        'exit',

        'interface ve :vlan',
        'ip address :gateway :subnet_mask',
        'ip helper 1 :dhcp_ip',
        'exit',
    ],
    'set_interface_port_on' => [
        'interface eth :port',
        'no disable',
    ],
    'set_interface_port_off' => [
        'interface eth :port',
        'disable',
    ],
    'set_interface_port_speed' => [
        # NOTE: Brocade has weird settings for port speed (1gbps-16gbps) - so we just auto negotiate.
        //'portcfgspeed 0',
        'interface eth :port',
        'speed-duplex :speed',
    ],
    'interface_wipe' => [
        'vlan :vlan',
        'no untagged eth :port',
        'no router-interface ve :vlan',
        'exit',

        'interface ve :vlan',
        'no ip address :gateway :subnet_mask',
        'no ip helper 1 :dhcp_ip',
        'exit',
    ],
    'exit_config' => [
        'wr me',
        'exit',
    ],
    'exit_enable' => 'exit',
];
