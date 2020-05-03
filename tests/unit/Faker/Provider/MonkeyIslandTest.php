<?php

/**
 * @package Alu\Tests
 * @subpackage Alu\Tests\Faker\Provider
 * @author Oskar Andersson <alu@byteberry.net>
 * @copyright 2020 Oskar Andersson
 * @license https://github.com/alu-/faker-providers/blob/master/LICENSE MIT License
 */

namespace Alu\Tests\Faker\Provider;

/**
 * Test MonkeyIsland
 */
final class MonkeyIslandTest extends \Alu\Tests\Faker\TestCase
{
    /**
     * This method is called before the first test of this test class is run.
     *
     * We add our provider to Faker here and also store the class name for usage later.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->providerClass = \Alu\Faker\Provider\MonkeyIsland::class;
        $this->faker->addProvider(new $this->providerClass($this->faker));
    }

    /**
     * Test name
     *
     * @return void
     */
    public function testName(): void
    {
        $this->uniqueHelper('characters', function () {
            return $this->faker->unique()->name;
        });
    }

    /**
     * Test location
     *
     * @return void
     */
    public function testLocation(): void
    {
        $this->uniqueHelper('locations', function () {
            return $this->faker->unique()->location;
        });
    }
}
