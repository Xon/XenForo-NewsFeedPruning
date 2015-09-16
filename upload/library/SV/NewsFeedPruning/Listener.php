<?php

class SV_NewsFeedPruning_Listener
{
    const AddonNameSpace = 'SV_NewsFeedPruning_';

    public static function load_class($class, &$extend)
    {
        $extend[] = self::AddonNameSpace.$class;
    }
}
