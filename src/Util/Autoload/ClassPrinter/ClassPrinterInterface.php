<?php

namespace BetterReflection\Util\Autoload\ClassPrinter;

use BetterReflection\Reflection\ReflectionClass;

interface ClassPrinterInterface
{
    /**
     * @param ReflectionClass $classInfo
     * @return string
     */
    public function __invoke(ReflectionClass $classInfo);
}
