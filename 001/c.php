<?php

interface people
{
    public function sex();
}


class Women implements people
{
    public function sex()
    {
        // TODO: Implement sex() method.
    }
}

class Men implements people
{
    public function sex()
    {
        // TODO: Implement sex() method.
    }
}

interface Factory{
    public function created();
}

class WomenFactory implements Factory{
    public function created()
    {
        return new Women();
    }
}
class MenFactory implements Factory{
    public function created()
    {
        return new Men();
    }
}

class PeopleFactory
{

    public function createSex($sex)
    {
        switch ($sex){
            case 'men':
                return new Men();
                break;
            case 'women':
                return new  Women();
                break;
        }
    }
    public function createWomen()
    {
        return new Women();
    }

    public function createMen()
    {
        return new Men();
    }
}


