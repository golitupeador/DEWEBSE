<?php
class JsonTools
{
    public static function cast($object, $class)
    {
        if (!is_object($object))

            throw new InvalidArgumentException('$object debe ser un objeto.');

        if (!is_string($class))

            throw new InvalidArgumentException('$class debe ser cadena.');

        if (!class_exists($class))

            throw new InvalidArgumentException(sprintf('Clase desconocida: %s.', $class));
        return unserialize(
            preg_replace(
                '/^O:\d+:"[^"]++"/',
                'O:' . strlen($class) . ':"' . $class . '"',
                serialize($object)
            )
        );
    }
}