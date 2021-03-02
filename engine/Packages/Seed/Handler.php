<?php

namespace Tool\Engine\Packages\Seed;

/**
 * Seed.php
 *
 * Command class to upload seeds.
 */
class Seed
{

    /**
     * Create seeds file.
     *
     * @access public
     * @param string $name - Seed`s name
     */
    public static function create(string $name): void
    {
        print("creating seed...\n");

        Facade::create($name);

        print("seed has been created.\n");
    }

    /**
     * Inserting seeds.
     *
     * @access public
     */
    public static function do(): void
    {
        print("uploading seeds...\n");

        Facade::do();

        print("seeds have been uploaded.\n");
    }

}
