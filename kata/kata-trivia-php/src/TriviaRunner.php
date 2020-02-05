<?php
/**
 * Created by PhpStorm.
 * User: VictorRentea
 * Date: 08-Nov-18
 * Time: 03:21 PM
 */

namespace video;

$outputString = '';

include 'Trivia.php';

class TriviaTest extends \PHPUnit\Framework\TestCase
{

    public function testX()
    {
        $aGame = new Trivia();

        echo "------------------------" . "\n";

        $aGame->add("Chet");
        $aGame->add("Pat");
        $aGame->add("Sue");

        do {
            $aGame->roll(rand(0, 5) + 1);
            if (rand(0, 9) == 7) {
                $notAWinner = $aGame->wrongAnswer();
            } else {
                $notAWinner = $aGame->wasCorrectlyAnswered();
            }
        } while ($notAWinner);
    }

    // global $outputString;
    // srand($seed)
}