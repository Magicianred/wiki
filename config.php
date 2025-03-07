<?php

use humhub\components\console\Application;
use humhub\modules\space\widgets\Menu;
use humhub\modules\user\widgets\ProfileMenu;

return [
    'id' => 'wiki',
    'class' => 'humhub\modules\wiki\Module',
    'namespace' => 'humhub\modules\wiki',
    'events' => array(
        ['class' => Menu::class, 'event' => Menu::EVENT_INIT, 'callback' => ['humhub\modules\wiki\Events', 'onSpaceMenuInit']],
        ['class' => ProfileMenu::class, 'event' => ProfileMenu::EVENT_INIT, 'callback' => ['humhub\modules\wiki\Events', 'onProfileMenuInit']],
        ['class' => 'humhub\modules\rest\Module', 'event' => 'restApiAddRules', 'callback' => ['humhub\modules\wiki\Events', 'onRestApiAddRules']],
        ['class' => Application::class, 'event' => Application::EVENT_BEFORE_ACTION, 'callback' => ['humhub\modules\wiki\Events', 'onBeforeConsoleAction']],
    ),
];
?>