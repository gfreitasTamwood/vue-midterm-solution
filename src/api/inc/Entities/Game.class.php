<?php

class Game {
    private int $id;
    private string $title;
    private string $thumbnail;
    private string $game_url;
    private string $genre;
    private string $publisher;

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle(string $title) {
		$this->title = $title;
	}

	public function getThumbnail() {
		return $this->thumbnail;
	}

	public function setThumbnail(string $thumbnail) {
		$this->thumbnail = $thumbnail;
	}

	public function getGameUrl() {
		return $this->game_url;
	}

	public function setGameUrl(string $game_url) {
		$this->game_url = $game_url;
	}

	public function getGenre() {
		return $this->genre;
	}

	public function setGenre(string $genre) {
		$this->genre = $genre;
	}

	public function getPublisher() {
		return $this->publisher;
	}

	public function setPublisher(string $publisher) {
		$this->publisher = $publisher;
	}

}