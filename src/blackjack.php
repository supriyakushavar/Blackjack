<?php
session_start();

class blackjack{
    public $score;
    public function __construct() {
		if (!$_SESSION['score']) {
			$this->score = 0;
		} else {
			$this->score = $_SESSION['score']; 
		}
	}
	public function hit() {
        $card = rand(1,11);
        $this->score += $card;
        $_SESSION['score'] = $this->score; 	
	}
    public function Stand(){
        $playerScore = $this->score;
        echo "Your Score is : ".$playerScore."<br>";
        unset($_SESSION['score']);
        $this->score = 0;
        while($_SESSION['score'] <= 15){
            $this->hit();
        }
        $dealerScore = $this->score;
        echo "Dealer Score is : ".$dealerScore."<br>";
        if($dealerScore > $playerScore){
            echo "Dealer Won!";
        }else{
            echo  "player Won!";
        }

    }
    public function Surrender(){
        echo "Your Score is : <b>".$this->score. "</b>less than dealer score hence <br>" ;
        unset($_SESSION['score']);
        while($_SESSION['score'] <= 15){
            $this->hit();
        }
        $dealerScore = $this->score;
        echo "Dealer Score is : ".$dealerScore."<br>";
        echo "You Lost <br> Dealer Won!";
        
    }
}


?>