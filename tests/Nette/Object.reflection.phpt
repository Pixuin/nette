<?php

/**
 * Test: Nette\Object reflection.
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette
 * @subpackage UnitTests
 */

use Nette\Object;



require __DIR__ . '/../NetteTest/initialize.php';

require __DIR__ . '/Object.inc';



$obj = new TestClass;
dump( $obj->getReflection()->getName() );
dump( $obj->Reflection->getName() );



__halt_compiler() ?>

------EXPECT------
string(9) "TestClass"

string(9) "TestClass"
