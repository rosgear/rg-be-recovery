<?php
/**
 * Этот файл является частью модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\Recovery\Controller;

use Ge;
use Ge\Http\Response;
use Ge\Mvc\Controller\Controller;

/**
 * Контроллер вывода капчи.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\Recovery\Controller
 * @see 4.0
 */
class Captcha extends Controller
{
    /**
     * Действие "index" выводит капчу.
     * 
     * @return Response
     */
    public function indexAction(): Response
    {
        /** @var Response $response */
        $response = $this->getResponse();
        
        $widget = Ge::$app->widgets->get('rg.wd.kcaptcha', ['toString' => true]);
        if ($widget) {
            /** @var string $type Тип изображения */
            $type = $widget->getCaptcha()->getType();
            if ($type) {
                /** @var \Ge\Http\Headers $headers */
                $headers = $response->getHeaders();
                $headers->add('content-type', 'image/' . $type);
                $response->setContent($widget->run());
            }
        }
        return $response; 
    }
}
