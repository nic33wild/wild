<?php

class Tamagochi
{
    private $hungriness;
    private $fullness;
    private $tiredness;
    private $happiness;

    public function __construct ($hungriness, $happiness, $fullness, $tiredness)
    {
        $this->setHungriness($hungriness);
        $this->setFullness($fullness);
        $this->setTiredness($tiredness);
        $this->setHappiness($happiness);
    
    }

    public function setHungriness($hungriness)
    {
        if($hungriness>0 && $hungriness <= 100)
        {
            $this->hungriness = $hungriness;
        }else{
            throw new Exception("Hungriness value must be between 1 and 100");
        }
    }

    public function setFullness($fullness)
    {
        if($fullness > 0 && $fullness <= 100){       
            $this->fullness = $fullness;
        }else{
            throw new Exception("Fullness value must be between 1 and 100");
        }
    }

    public function setTiredness($tiredness)
    {
        if($tiredness > 0 && $tiredness <= 100){       
            $this->tiredness = $tiredness;
        }else{
            throw new Exception("Tiredness value must be between 1 and 100");
        }
    }

    public function setHappiness($happiness)
    {
        if($happiness > 0 && $happiness <= 100){       
            $this->happiness = $happiness;
        }else{
            throw new Exception("Happiness value must be between 1 and 100");
        }
    }

    public function getHungriness()
    {
        return $this->hungriness;
    }

    public function getFullness()
    {
        return $this->fullness;
    }

    public function getTiredness()
    {
        return $this->tiredness;
    }

    public function getHappiness()
    {
        return $this->happiness;
    }

    public function feed()
    {
        $hungriness = $this->getHungriness();
        if($hungriness>=31)
        {
            $hungriness-=30;
        }
        else
        {
            $hungriness =1;
        }

        $this->setHungriness($hungriness);

        $fullness = $this->getFullness();
        if($fullness<=70)
        {
            $fullness+=30;
        }
        else
        {
            $fullness =100;
        }

        $this->setFullness($fullness);

        return $this;
    }

    public function play()
    {     
        $happiness = $this->getHappiness();
        if($happiness<=70)
        {
            $happiness+=30;
        }
        else
        {
            $happiness =100;
        }

        $this->setHappiness($happiness);

        $tiredness = $this->getTiredness();
        if($tiredness<=70)
        {
            $tiredness+=30;
        }
        else
        {
            $tiredness =100;
        }

        $this->setTiredness($tiredness);
        return $this;
    }

    public function putToBed()
    {     
        $this->setTiredness(1);
        return $this;
    }

    public function poop()
    {     
        $this->setFullness(1);
        return $this;
    }

    public function timeEffect($time)
    {

        $happiness = $this->getHappiness();
        if($happiness-$time/1000>1)
        {
            $happiness-=$time/1000;
        }
        else
        {
            $happiness =1;
        }
        $this->setHappiness($happiness);

        $tiredness = $this->getTiredness();
        if($tiredness+$time/1000<=99)
        {
            $tiredness+=$time/1000;
        }
        else
        {
            $tiredness =100;
        }
        $this->setTiredness($tiredness);

        $hungriness = $this->getHungriness();
        if($hungriness+$time/1000<=99)
        {
            $hungriness+=$time/1000;
        }
        else
        {
            $hungriness =100;
        }
        $this->setHungriness($hungriness);

        return $this;

    }





}