<?php

class SV_DeletedPostSearch_Listener
{
    const AddonNameSpace = 'SV_DeletedPostSearch';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.'_'.$class;
    }
}
