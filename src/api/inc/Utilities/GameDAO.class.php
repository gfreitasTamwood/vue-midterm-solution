<?php

class GameDAO {
    private static $db;

    public static function startDb() {
        self::$db = new PDOAgent("Game");
    }

    public static function getAllGames() {
        $sql = "SELECT * FROM game";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function insertGame(Game $newGame) {
        $sql = "INSERT INTO game (title,thumbnail,game_url,genre,publisher) VALUES (:title, :thumb,:gameUrl,:genre,:publisher)";

        self::$db->query($sql);

        self::$db->bind(":title",$newGame->getTitle());
        self::$db->bind(":thumb",$newGame->getThumbnail());
        self::$db->bind(":gameUrl",$newGame->getGameUrl());
        self::$db->bind(":genre", $newGame->getGenre());
        self::$db->bind(":publisher",$newGame->getPublisher());

        self::$db->execute();

        return self::$db->lastInsertId();
    }
}