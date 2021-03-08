<?php

namespace Tool\Engine\Packages\Migration;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\Packages\Seed\Facade as Seed;
use Tool\Engine\ITransaction;
use Engine\Config;


/**
 * Migration.php
 *
 * Command class to deploy RawSQL schemes.
 */
class MigrationService
{
    /**
     * Alias for service.
     *
     * @access public
     * @var string
     */
    static public $alias = 'migration';

    /**
     * List of migrations.
     *
     * @access private
     */
    private $_migrations_list;

    /**
     * Static constructor.
     *
     * @access public
     */
    public function __construct()
    {
        $this->_migrations_list = Config::get('migrations');
    }

    /**
     * Create tables.
     *
     * @access public
     * @param string $name - Migration`s name
     */
    public function create(string $name): void
    {
        print("Creating migration...\n");

        $path = Config::get('env')['migrations'];
        $date = date('m_d_Y_H_i_s');
        $file = "{$path}/{$name}_{$date}.php";
        $content =
/** @lang php */
<<<EOT
<?php

namespace Database\Migrations;

use Engine\ITransaction;
use Engine\Decorators\RawSQL;

/**
 * {$name}_{$date}.php
 *
 * Migration for ...
 */
class {$name}_{$date} implements ITransaction
{
    
    /**
     * Performs migration
     *
     */
    public static function commit() {
        RawSQL::fetch(
            'CREATE TABLE `$name` (
                `id` INT PRIMARY KEY AUTO_INCREMENT
            )');
    }
    
    /**
     * Revert migration
     *
     */
    public static function revert() {
        RawSQL::fetch('DROP TABLE `$name`');
    }
}
EOT;

        file_put_contents($file, $content);

        print("Migration has been created.\n");
    }

    /**
     * Creates tables.
     *
     * @access public
     */
    public function do(): void
    {
        print("Setting up migrations...\n");

        foreach ($this->_migrations_list as $migration) {
            if (in_array(ITransaction::class, class_implements($migration))) {
                print("Migrating $migration\n");
                $migration::commit();
            }
        }

        print("Migrations have been set up.\n");
    }

    /**
     * Drops tables.
     *
     * @access public
     */
    public function undo(): void
    {
        print("Reverting migrations...\n");

        RawSQL::query('SET foreign_key_checks = 0')->fetch();
        foreach ($this->_migrations_list as $migration) {
            if (in_array(ITransaction::class, class_implements($migration))) {
                $migration::revert();
            }
        }
        RawSQL::query('SET foreign_key_checks = 1')->fetch();

        print("All migrations have been reverted.\n");
    }
    
}