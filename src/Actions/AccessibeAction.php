<?php

namespace Astrogoat\Accessibe\Actions;

use Helix\Lego\Apps\Actions\Action;

class AccessibeAction extends Action
{
    public static function actionName(): string
    {
        return 'Accessibe action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
