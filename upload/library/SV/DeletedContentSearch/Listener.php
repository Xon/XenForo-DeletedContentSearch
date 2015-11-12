<?php

class SV_DeletedContentSearch_Listener
{
    const AddonNameSpace = 'SV_DeletedContentSearch_';

    public static function install($existingAddOn, $addOnData)
    {
        $version = isset($existingAddOn['version_id']) ? $existingAddOn['version_id'] : 0;

        $db = XenForo_Application::getDb();
    }

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.$class;
    }
}
