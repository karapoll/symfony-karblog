<?php

namespace Troiswa\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TroiswaBlogBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
