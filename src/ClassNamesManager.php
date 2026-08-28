<?php

namespace AlexManase\Utils;

use AlexManase\Utils\Support\ClassBuilder;

class ClassNamesManager
{
    public function make($styles = null)
    {
        $builder = new ClassBuilder;

        return $styles === null
            ? $builder
            : $builder->add($styles);
    }

    public function add($styles)
    {
        return $this->make($styles);
    }
}
