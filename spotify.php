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
    private int $totalMedias=0;

    public function addMedia(Song $song): void{
        $this->songs[] = $song;
        $this->totalMedias++;
    }

    public function __toString():string{
        $rep="";
        $rep.="Songs added: ".strval($this->totalMedias)."\nPlaylist Length:";
        $duration=0;
        foreach($this->songs as $song){
            $duration+=intval(explode(":",$song->getDuration())[0])*60+intval(explode(":",$song->getDuration())[1]);
        }
        $rep .=" ".strval(intval($duration/3600))."h ". strval(intval($duration/60))."m ".strval($duration%60)."s\n";
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

    public function start(){
        $playlist=new Playlist();
        foreach($this->readLine(true) as $line){
            $song=explode(";",$line);
            $playlist->addMedia(new Song($song[0],$song[1],$song[2]));
        }
        echo $playlist->__toString();
    }

    private function readLine(bool $asArray = false): array|bool|string
    {
        ob_start();

        echo implode("", $this->getContent());

        $data = ob_get_contents();
        if ($asArray) {
            $data = explode("\n", ob_get_contents());
        }

        ob_clean();

        return $data;
    }

    public function write(string $content): void
    {
        $this->content[] = $content;
    }

}

$app = new App();
$app->setContent(["ABBA;Mamma Mia;3:35\n", "Harry Styles;Watermelon Sugar;2:54\n", "LF SYSTEM;Affraid To Feel;2:58"]);
$app->start();

$app2 = new App();
$app2->setContent(["JUL;Alors la zone;3:25\n", "Naps;La kiffance;2:59\n", "2TH;Si seulement;4:09\n", "Vayn;24H chrono;3:48"]);
$app2->start();