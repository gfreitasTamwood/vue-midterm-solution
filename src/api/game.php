<?php


require_once("./inc/config.inc.php");
require_once("./inc/Entities/Game.class.php");
require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/GameDAO.class.php");
require_once("./inc/Utilities/GameConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET":
        GameDAO::startDb();
        echo json_encode(
            GameConverter::convertGame(
                GameDAO::getAllGames()
            )
        );
    break;
    case "POST":
        GameDAO::startDb();
        $data = json_decode(file_get_contents("php://input"));
        GameDAO::insertGame(
            GameConverter::convertStd($data)
        );
}