<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use BetterReflection\Reflector\ClassReflector;
use BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use BetterReflection\Util\Autoload\ClassLoader;
use BetterReflection\Util\Autoload\ClassLoaderMethod\EvalLoader;
use BetterReflection\Util\Autoload\ClassPrinter\PhpParserPrinter;

$loader = new ClassLoader(new EvalLoader(new PhpParserPrinter()));

// Create the reflection first (without loading)
$classInfo = (new ClassReflector(new SingleFileSourceLocator(__DIR__ . '/MyClass.php')))->reflect('MyClass');
$loader->addClass($classInfo);

// Override the body...!
$classInfo->getMethod('foo')->setBodyFromClosure(function () {
    return 4;
});

$c = new MyClass();
echo $c->foo() . "\n"; // should be 4...!?!??
