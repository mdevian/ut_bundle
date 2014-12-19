<?php
/**
 * Created by PhpStorm.
 * User: devian
 * Date: 28.10.14
 * Time: 13:53
 */

namespace Stool\UsefulToolsBundle\Configurator;


class TmpConfigurator
{

    public function getTmpDir()
    {
        return get_current_user();
    }
}
