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
 * CookieWarning injector filter.
 *
 * This class binds the correct events into the provided event
 * manager
 */
class CookieWarningFilter extends DispatcherFilter
{
    /**
     * Get the Response Event after Request handling
     *
     * @param Event $event : Event
     * @return void
     */
    public function afterDispatch(Event $event)
    {
        $request = $event->data['request'];
        $response = $event->data['response'];
        debug($response);
        if (!$request->cookie('cookie_warning')) {
            $expire = Configure::read('cookie_warning.expire');
            $response->cookie(['name' => 'cookie_warning',
                'value' => $request->here(),
                'expire' => $expire]);
            $this->_injectCookieAdvert($response);
        }
    }

    /**
     * Inject the script with the cookie warning
     *
     * @param Response $response : Response
     * @return void
     */
    protected function _injectCookieAdvert($response)
    {
        if (strpos($response->type(), 'html') === false) {
            return;
        }
        $body = $response->body();
        $pos = strrpos($body, '</body>');
        if ($pos === false) {
            return;
        }
        $view = "<iframe src='" . Router::url('/cookie/warnings/display-info') . "' style='width:100%;position:fixed;top:0;left: 0;z-index:9999' id='cookie_iframe'></iframe>";
        $body = substr($body, 0, $pos) . $view . substr($body, $pos);
        $response->body($body);
    }
}
