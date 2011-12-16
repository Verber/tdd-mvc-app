<?php
/**
 * Provide autoloading function for app classes
 *
 * @author Ivan Mosiev <i.k.mosev@gmail.com>
 */
class Autoloader
{

    /**
     * simple autoload function
     * returns true if the class was loaded, otherwise false
     *
     * @param string $className
     * 
     * @return boolean
     */
    public static function autoload($className)
    {
        if (class_exists($className, false) || interface_exists($className, false)) {
            return false;
        }

        $class = dirname(__FILE__)
            . DIRECTORY_SEPARATOR
            . str_replace('\\', DIRECTORY_SEPARATOR, $className)
            . '.php';

        if (file_exists($class)) {
            require $class;

            return true;
        }

        return false;
    }
}