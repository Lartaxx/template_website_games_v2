<?php

namespace Core;

use App\Config;

class GameQ {
    protected $type = Config::SERVER_TYPE;
    protected $host = Config::SERVER_HOST;

    protected function init_server() {
        require_once('../vendor/gameq/src/GameQ/Autoloader.php');
        
        $GameQ = new \GameQ\GameQ();
        $GameQ->addServer([
            'type' => $this->type,
            'host' => $this->host
        ]);
        $results = $GameQ->process();
        return $results;
    }

    public function getDatas() {
        $debug = $this->init_server();
        return $debug[$this->host];
        
    }
}