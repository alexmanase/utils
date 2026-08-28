<?php

namespace AlexManase\Utils;

class ClassNamesManager
{
    public function make($styles = null)
    {
        $builder = new ClassBuilder;

        return $styles === null
            ? $builder
            : $builder->add($styles);
    }
}
