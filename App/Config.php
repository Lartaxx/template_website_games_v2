<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'db_host'; // example : 127.0.0.1:3306

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'db_name'; // example : website_games

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'db_user'; // example : root

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'db_password'; // example : mygoodpassword

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Type of your gameserver => all names here : https://austinb.github.io/GameQ/api/class-GameQ.Protocol.html : Choose your game and show the $name or $name_long and put this here
     * @var string
     */
    const SERVER_TYPE = "gmod";

    /**
     * Host of your game server HOST/IP:PORT
     * @var string
     */
    const SERVER_HOST = "server_host"; // example : 178.239.172.39:27015

    const RCON_HOST = "rcon_host"; // example : 149.202.89.164

    const RCON_PORT = "rcon_port"; // example : 27001

    const RCON_PASSWORD = "rcon_password"; // example : mygoodpassword
}

