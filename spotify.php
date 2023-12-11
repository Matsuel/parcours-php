<?php

class Song{
    private string $artist;
    private string $title;
    private string $duration;

    public function __construct(string $artist, string $title, string $duration){
        $this->artist = $artist;
        $this->title = $title;
        $this->duration = $duration;
    }

    public function getArtist(): string{
        return $this->artist;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getDuration(): string{
        return $this->duration;
    }

    public function setArtist(string $artist): void{
        $this->artist = $artist;
    }

    public function setTitle(string $title): void{
        $this->title = $title;
    }

    public function setDuration(string $duration): void{
        $this->duration = $duration;
    }
}

class Playlist{
    private array $songs;
    private int $totalMedias;

    public function addMedia(Song $song): void{
        $this->songs[] = $song;
        $this->totalMedias++;
    }

    public function __toString():string{
        $rep="";
        $rep+="Songs added: "+this.totalMedias+"\nPlaylist Length:";
        $duration=0;
        foreach($this->songs as $song){
            $duration+=intval($song->getDuration().explode(":",$song->getDuration())[1])+intval(explode(":",$song->getDuration())[0])*60;
        }
        $rep+= ($duration%3600)+"h "+($duration%3600)/60+"min "+($duration%3600)%60+"sec";
        return $rep;
    }
}

class App{
    private array $content = [];

    public function getContent(): array{
        return $this->content;
    }

    public function setContent(array $content): void{
        $this->content = $content;
    }

}