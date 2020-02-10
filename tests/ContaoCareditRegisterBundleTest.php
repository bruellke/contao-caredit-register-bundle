<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Bruellke\ContaoCareditRegisterBundle\Tests;

use Bruellke\ContaoCareditRegisterBundle\ContaoCareditRegisterBundle;
use PHPUnit\Framework\TestCase;

class ContaoCareditRegisterBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoCareditRegisterBundle();

        $this->assertInstanceOf('Bruellke\ContaoCareditRegisterBundle\ContaoCareditRegisterBundle', $bundle);
    }
}
