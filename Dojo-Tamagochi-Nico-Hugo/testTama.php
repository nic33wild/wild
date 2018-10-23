<?php

include "tamagochi.php";

function test()
{
    $tama1 = new Tamagochi(50,50,50,50);
    if ($tama1->getHappiness() === 50 && 
        $tama1->getHungriness() === 50 && 
        $tama1->getFullness() === 50 && 
        $tama1->getTiredness() === 50)
    {
        echo "TEST OK le tama1 est bien initialisé <br>";
    }
    else
    {
        throw new Exception("Erreur lors de l'initialisation du tama1 : happiness is ".
        $tama1->getHappiness()." and should be 50 hungriness is ".
        $tama1->getHungriness()." and should be 50 fullness is ".
        $tama1->getFullness()." and should be 50 tiredness is ".
        $tama1->getTiredness()." and should be 50");
    }

    $isExcepetionThrown = false;
    try {
        $tama2 = new Tamagochi(0,50,102,50);
    } catch(Exception $e) {
        $isExcepetionThrown = true;
        echo "TEST OK exception reçue : ".$e->getMessage()."<br>";
    } finally {
        if (!$isExcepetionThrown){
            trow new Exception ("An exception should have been thrown");
        }
    }

    $tama3 = new Tamagochi(50,50,80,100);
    $tama3->feed();
    if ($tama3->getHappiness() === 50 &&
        $tama3->getHungriness() === 20 && 
        $tama3->getFullness() === 100 && 
        $tama3->getTiredness()  ===  100)
    {
        echo "TEST OK le tama3 a bien mangé <br>";
    }
    else
    {
        throw new Exception("Erreur lors de l'alimentation du tama3 : happiness is ".
        $tama3->getHappiness()." and should be 50 hungriness is ".
        $tama3->getHungriness()." and should be 20 fullness is ".
        $tama3->getFullness()." and should be 100 tiredness is ".
        $tama3->getTiredness()." and should be 100");
    }

    $tama4 = new Tamagochi(20,50,50,100);
    $tama4->feed();
    if ($tama4->getHappiness() === =50 && 
        $tama4->getHungriness() === =1 && 
        $tama4->getFullness() === 80 && 
        $tama4->getTiredness()  ===  100)
    {
        echo "TEST OK le tama4 a bien mangé <br>";
    }
    else
    {
        throw new Exception("Erreur lors de l'alimentation de tama4 : happiness is ".
        $tama4->getHappiness()." and should be 50 hungriness is ".
        $tama4->getHungriness()." and should be 1 fullness is ".
        $tama4->getFullness()." and should be 80 tiredness is ".
        $tama4->getTiredness()." and should be 100");
    }

    $tama5 = new Tamagochi(50,80,50,50);
    $tama5->play();
    if ($tama5->getHappiness() === 100 && 
        $tama5->getHungriness() === 50 && 
        $tama5->getFullness() === 50 && 
        $tama5->getTiredness()  ===  80)
    {
        echo "TEST OK le tama5 a bien joué <br>";
    }
    else
    {
        throw new Exception("Erreur lors du jeu du tama5 : happiness is ".
        $tama5->getHappiness()." and should be 100 hungriness is ".
        $tama5->getHungriness()." and should be 50 fullness is ".
        $tama5->getFullness()." and should be 50 tiredness is ".
        $tama5->getTiredness()." and should be 80");
    }

    $tama6 = new Tamagochi(50,50,50,90);
    $tama6->play();
    if ($tama6->getHappiness() === 80 && 
        $tama6->getHungriness() === 50 && 
        $tama6->getFullness() === 50 && 
        $tama6->getTiredness()  ===  100)
    {
        echo "TEST OK le tama6 a bien joué <br>";
    }
    else
    {
        throw new Exception("Erreur lors du jeu du tama6 : happiness is ".
        $tama6->getHappiness()." and should be 80 hungriness is ".
        $tama6->getHungriness()." and should be 50 fullness is ".
        $tama6->getFullness()." and should be 50 tiredness is ".
        $tama6->getTiredness()." and should be 100");
    }

    $tama7 = new Tamagochi(50,50,50,50);
    $tama7->putToBed();
    if ($tama7->getHappiness() === 50 && 
        $tama7->getHungriness() === 50 && 
        $tama7->getFullness() === 50 && 
        $tama7->getTiredness()  ===  1)
    {
        echo "TEST OK le tama7 a bien dormi <br>";
    }
    else
    {
        throw new Exception("Erreur apres avoir dormi : happiness is ".
        $tama7->getHappiness()." and should be 50 hungriness is ".
        $tama7->getHungriness()." and should be 50 fullness is ".
        $tama7->getFullness()." and should be 50 tiredness is ".
        $tama7->getTiredness()." and should be 1");
    }

    $tama8 = new Tamagochi(50,50,50,50);
    $tama8->poop();
    if ($tama8->getHappiness() === 50 && 
        $tama8->getHungriness() === 50 && 
        $tama8->getFullness() === 1 && 
        $tama8->getTiredness()  ===  50)
    {
        echo "TEST OK le tama8 a bien fait caca <br>";
    }
    else
    {
        throw new Exception("Erreur lors du popo : happiness is ".
        $tama8->getHappiness()." and should be 50 hungriness is ".
        $tama8->getHungriness()." and should be 50 fullness is ".
        $tama8->getFullness()." and should be 1 tiredness is ".
        $tama8->getTiredness()." and should be 50");
    }

    $tama9 = new Tamagochi(50,50,50,50);
    $tama9->timeEffect(1000);
    if ($tama9->getHappiness() === 49 && 
        $tama9->getHungriness() === 51 && 
        $tama9->getFullness() === 50 && 
        $tama9->getTiredness()  ===  51)
    {
        echo "TEST OK le tama9 a bien été victime du temps qui passe <br>";
    }
    else
    {
        throw new Exception("Erreur lors du calcul de l'effet du temps : happiness is ".
        $tama9->getHappiness()." and should be 49 hungriness is ".
        $tama9->getHungriness()." and should be 51 fullness is ".
        $tama9->getFullness()." and should be 50 tiredness is ".
        $tama9->getTiredness()." and should be 51");
    }

    $tama10 = new Tamagochi(50,5,50,95);
    $tama10->timeEffect(10000);
    if ($tama10->getHappiness() === 1 
    && $tama10->getHungriness() === 60 
    && $tama10->getFullness() === 50 
    && $tama10->getTiredness()  ===  100)
    {
        echo "TEST OK le tama10 a bien été victime du temps qui passe <br>";
    }
    else
    {
        throw new Exception("Erreur lors du calcul de l'effet du temps : happiness is ".
        $tama10->getHappiness()." and should be 1 hungriness is ".
        $tama10->getHungriness()." and should be 60 fullness is ".
        $tama10->getFullness()." and should be 50 tiredness is ".
        $tama10->getTiredness()." and should be 100");
    }


}

test();