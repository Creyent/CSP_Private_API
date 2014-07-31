<?php

namespace CSP\BaseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CSPBaseBundle extends Bundle
{
    public function getParent() {
        return "FOSUserBundle";
    }
}
