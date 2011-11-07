<?php

namespace Acme\ErrorBundle\Controller;

class Foo
{
    public function causeException()
    {
		throw new \Exception('This is the exception');
    }
}
