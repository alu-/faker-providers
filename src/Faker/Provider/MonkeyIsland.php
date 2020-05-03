<?php

/**
 * Generate data from the Monkey Island series by LucasArts.
 *
 * Character and location data sourced from https://www.giantbomb.com/
 *
 * @package Alu\Faker
 * @subpackage Alu\Faker\Provider
 * @author Oskar Andersson <alu@byteberry.net>
 * @copyright 2020 Oskar Andersson
 * @license https://github.com/alu-/faker-providers/blob/master/LICENSE MIT License
 */

namespace Alu\Faker\Provider;

/**
 * Faker Provider for Monkey Island data
 */
class MonkeyIsland extends \Faker\Provider\Base
{
    /**
     * @var array $characters
     */
    protected static $characters = [
        'Guybrush Threepwood', 'LeChuck', 'Elaine Marley', 'Murray',
        'Wally B. Feed', 'Stan', 'Voodoo Lady', 'Meathook', 'Herman Toothrot',
        'Largo LaGrande', 'Three-headed monkey', 'Carla', 'Ozzie Mandrill',
        'Otis', 'Mancomb Seepgood', 'Pirate Leaders', 'Rapp Scallion',
        'Cannibals', 'Men of low moral fiber', 'The Lost Welshman',
        'René Rottingham', 'Edward Van Helgen', 'Citizen of Mêlée',
        'Fester Shinetop', 'Dinghy Dog', 'Captain Blondebeard',
        'Inspector Canard', 'Kenny Falmouth', 'Walt', 'Wharf Rat',
        'Pegnose Pete', 'King Andre', 'Captain Smirk', 'Miss Rivers', 'Yangja',
        'Mungle', 'Hellbeard the Unrepentant', 'Jumbeaux Le Feet',
        'Hemlock McGee', 'D\'Oro', 'Gaffer Crimpdigit', 'Davey Nipperkin',
        'Reginald Van Winslow', 'Marquis de Singe', 'Jojo Jr.', 'McGillicutty',
        'Morgan LeFlay', 'Haggis McMutton', 'Minerva Stroneheim-Goodsoup',
        'Anemone', 'Captain Kate Capsize', 'Cobb', 'El Pollo Diablo'
    ];

    /**
     * @var array $locations
     */
    protected static $locations = [
        'Scabb Island', 'Dinky Island', 'Knuttin Atoll Island', 'Booty Island',
        'Blood Island', 'Monkey Island', 'Lucre Island', 'Mêlée Island',
        'Caribbean', 'Phatt Island', 'Jambalaya Island', 'Plunder Island',
        'Skull Island', 'The Tri-Island Area', 'Tropical Island', 'SCUMM Bar',
        'Beach', 'Carnival of the Damned', 'Tavern', 'Pirate Ship', 'Cemetery',
        'Norway', 'Dock', 'Kitchen', 'Swamp', 'Circus Tent', 'Flotsam Island',
        'Forest', 'Prison', 'Bedroom', 'Bar', 'Church', 'Catacombs', 'Cliffside',
        'Mansion', 'Jungle', 'Ocean', 'Mysterious Island', 'Ship', 'Bank',
        'Underwater', 'Cave', 'Amusement Park', 'Mine', 'Pub', 'Hotels', 'Cabin',
        'Tunnel', 'Starbuccaneers', 'Lighthouse', 'Courtroom', 'Library',
        'Waterfall'
    ];

    /**
     * Get the name of a character from the Monkey Island franchise.
     *
     * The amount of unique names is 53.
     *
     * @return string
     */
    public function name(): string
    {
        return static::randomElement(static::$characters);
    }

    /**
     * Get the name of a location in the Monkey Island franchise.
     *
     * The amount of unique locations is 53.
     *
     * @return string
     */
    public function location(): string
    {
        return static::randomElement(static::$locations);
    }
}
