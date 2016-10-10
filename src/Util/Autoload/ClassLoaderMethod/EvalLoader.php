<?php

namespace BetterReflection\Util\Autoload\ClassLoaderMethod;

use BetterReflection\Reflection\ReflectionClass;
use BetterReflection\Util\Autoload\ClassPrinter\ClassPrinterInterface;

class EvalLoader implements LoaderMethodInterface
{
    /**
     * @var ClassPrinterInterface
     */
    private $classPrinter;

    public function __construct(ClassPrinterInterface $classPrinter)
    {
        $this->classPrinter = $classPrinter;
    }

    /**
     * {@inheritdoc}
     */
    public function __invoke(ReflectionClass $classInfo)
    {
        eval($this->classPrinter->__invoke($classInfo));
    }
}
