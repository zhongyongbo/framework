<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Shadon\Mvc;

use Phalcon\Mvc\View as MvcView;
use Phalcon\Text;

/**
 * Class View.
 */
class View extends MvcView
{
    public function render($controllerName, $actionName, $params = null): void
    {
        $controllerName = lcfirst(Text::camelize($controllerName));
        parent::render($controllerName, $actionName, $params);
    }
}
