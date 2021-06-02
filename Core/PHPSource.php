<?php

namespace Core;

use App\Config;
use xPaw\SourceQuery\SourceQuery;


class PHPSource {
    protected $host = Config::RCON_HOST;
    protected $port = Config::RCON_PORT;
    protected $password = Config::RCON_PASSWORD;

    protected function init_server() {
        require_once('../vendor/phpsource/SourceQuery/bootstrap.php');
        
        $query = new \xPaw\SourceQuery\SourceQuery();
        try {
            $query->Connect($this->host, $this->port, 1, SourceQuery::SOURCE);
            $query->SetRconPassword($this->password);
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }
        return $query;
    }

    public function rconCommand(String $command) {
        $query = $this->init_server();
        return $query->Rcon($command);
        
    }
}