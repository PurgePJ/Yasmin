<?php
/**
 * Yasmin
 * Copyright 2017-2018 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Yasmin/blob/master/LICENSE
*/

namespace CharlotteDunois\Yasmin\WebSocket\Handlers;

/**
 * WS Event handler
 * @internal
 */
class Reconnect implements \CharlotteDunois\Yasmin\Interfaces\WSHandlerInterface {
    protected $wshandler;
    
    function __construct(\CharlotteDunois\Yasmin\WebSocket\WSHandler $wshandler) {
        $this->wshandler = $wshandler;
    }
    
    function handle(\CharlotteDunois\Yasmin\WebSocket\WSConnection $ws, $packet): void {
        $ws->reconnect($packet['d']);
    }
}
