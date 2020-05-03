<?php

/**
 * @package Alu\Tests
 * @subpackage Alu\Tests\Faker
 * @author Oskar Andersson <alu@byteberry.net>
 * @copyright 2020 Oskar Andersson
 * @license https://github.com/alu-/faker-providers/blob/master/LICENSE MIT License
 */

namespace Alu\Tests\Faker;

use Faker\Generator;
use ReflectionClass;

/**
 * An abstract class which all unit tests extend.
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Generator A Faker Generator
     */
    protected $faker;

    /**
     * @var string The name of the provider class we run tests against.
     */
    protected $providerClass;

    /**
     * This method is called before the first test of this test class is run.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->faker = new Generator();
    }

    /**
     * Helper that tests if all unique values from an array is used
     *
     * @param string   $property_name The name of the property containing the dataset.
     * @param callable $subject       A callable which returns a unique value from generator.
     *
     * @return void
     */
    protected function uniqueHelper(string $property_name, callable $subject): void
    {
        $values = $this->getPropertyByReflection($property_name);

        $length = count($values);
        for ($i = 0; $i < $length; $i++) {
            $value = $subject();
            $this->assertContains($value, $values);
            unset($values[array_search($value, $values)]);
        }
        $this->assertEmpty($values);
    }

    /**
     * Read a property from a class with ReflectionClass
     *
     * @param string $name The name of the property.
     *
     * @return mixed Return the contents of property.
     */
    protected function getPropertyByReflection(string $name)
    {
        $class = new ReflectionClass($this->providerClass);
        $property = $class->getProperty($name);
        $property->setAccessible(true);

        return $property->getValue();
    }
}
