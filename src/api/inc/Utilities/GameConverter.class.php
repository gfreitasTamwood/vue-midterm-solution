<?php

class GameConverter {

    public static function convertGame($newGame) {
        if ( ! is_array($newGame) ) {
            $gameStd = new stdClass;

            $gameStd->id = $newGame->getId();
            $gameStd->title = $newGame->getTitle();
            $gameStd->thumbnail = $newGame->getThumbnail();
            $gameStd->game_url = $newGame->getGameUrl();
            $gameStd->genre = $newGame->getGenre();
            $gameStd->publisher = $newGame->getPublisher();

            return $gameStd;
        } else {
            $gameList = [];
            for($i = 0; $i < count($newGame); $i++){
                $game = new stdClass;
                $game->id = $newGame[$i]->getId();
                $game->title = $newGame[$i]->getTitle();
                $game->thumbnail = $newGame[$i]->getThumbnail();
                $game->game_url = $newGame[$i]->getGameUrl();
                $game->genre = $newGame[$i]->getGenre();
                $game->publisher = $newGame[$i]->getPublisher();
                
                $gameList[] = $game;
            }
            return $gameList;
        }
    }

    public static function convertStd($gameStd) {
        if ( ! is_array($gameStd) ) {
            $newGame = new Game();

            $newGame->setTitle($gameStd->title);
            $newGame->setThumbnail($gameStd->thumbnail);
            $newGame->setGameUrl($gameStd->game_url);
            $newGame->setGenre($gameStd->genre);
            $newGame->setPublisher($gameStd->publisher);

            return $newGame;
        } else {
            $gameList = [];
            for($i = 0; $i < count($gameStd); $i++){
                $newGame = new Game();
                $newGame[$i]->setTitle($game->title);
                $newGame[$i]->setThumbnail($game->thumbnail);
                $newGame[$i]->setGameUrl($game->game_url);
                $newGame[$i]->setGenre($game->genre);
                $newGame[$i]->setPublisher($game->publisher);
                
                $gameList[] = $newGame;
            }
            return $gameList;
        }
    }
}