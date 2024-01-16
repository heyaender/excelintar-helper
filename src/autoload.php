<?php

spl_autoload_register(static function ($class) {
    $namespace = 'heyaender\\ExcelintarHelper\\';
    if (0 === strpos($class, $namespace)) {
        include __DIR__ . '/ExcelintarHelper/' . str_replace($namespace, '', $class) . '.php';
    }
});

// EOF