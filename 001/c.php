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

class PeopleFactory
{
    public function createWomen()
    {
        return new Women();
    }

    public function createMen()
    {
        return new Men();
    }
}


