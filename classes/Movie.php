<?php

class Movie{
    private $title, $votes, $genre, $length, $voteAverage = 0;

    function __construct($title, $votes, $genre, $length){
        $this->title = $title;
        $this->votes = $votes;
        $this->genre = $genre;
        $this->length = $length;

        $this->calculateAverage();
    }

    private function calculateAverage(){
        foreach($this->votes as $vote)
            $this->voteAverage += $vote;

        $this->voteAverage /= count($this->votes);
        $this->voteAverage = round($this->voteAverage, 2);
    }

    public function print(): String{
        return 
        "
        <hr>
        <h5 class='text-center pt-2'>" . $this->title . "</h5>" . "
        <div class='d-flex justify-content-center gap-3 pb-2'>
            <div>
                <strong>Vote: </strong>" . $this->voteAverage . ", 
            </div>
            <div>
                <strong>Genre: </strong>" . $this->genre . ",
            </div>
            <div>
                <strong>Length: </strong>" . $this->length . " min
            </div>
        </div>
        <hr>";
    }
}


