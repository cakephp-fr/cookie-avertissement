<?php
/**
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace CookieWarning\Routing\Filter;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Routing\DispatcherFilter;
use Cake\Routing\Router;

/**
 * Toolbar injector filter.
 *
 * This class loads all the panels into the registry
 * and binds the correct events into the provided event
 * manager
 */
class CookieWarningFilter extends DispatcherFilter
{
    /**
     * Récupération de l'évenement response après traitement de la requête
     * @param Event $event
     */
    public function afterDispatch(Event $event)
    {
        $request = $event->data['request'];
        $response = $event->data['response'];
        if (!$request->cookie('cookie_advert')) {
            $expire = Configure::read('cookie_warning.expire');
            $response->cookie(['name' => 'cookie_advert',
                'value' => $request->here(),
                'expire' => $expire]);
            $this->_inject_cookie_advert($response);
        }
    }

    /**
     * On injecte le script concernant l'avertissement sur le cookie
     * @param $response
     */
    public function _inject_cookie_advert($response)
    {
        if (strpos($response->type(), 'html') === FALSE) {
            return;
        }
        $body = $response->body();
        $pos = strrpos($body, '</body>');
        if ($pos === FALSE) {
            return;
        }
        $view = "<iframe src='" . Router::url('/cookie_warning/cookie_warnings/display_info') . "' style='width:100%;position:fixed;top:0;left: 0;z-index:9999' id='cookie_iframe'></iframe>";
        $body = substr($body, 0, $pos) . $view . substr($body, $pos);
        $response->body($body);
    }
}
