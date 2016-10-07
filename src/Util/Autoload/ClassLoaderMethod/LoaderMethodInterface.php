<?php

namespace BetterReflection\Util\Autoload\ClassLoaderMethod;

use BetterReflection\Reflection\ReflectionClass;

interface LoaderMethodInterface
{
    /**
     * @param ReflectionClass $classInfo
     * @return void
     */
    public function __invoke(ReflectionClass $classInfo);
}
