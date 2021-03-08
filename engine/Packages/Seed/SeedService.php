<?php

namespace Tool\Engine\Packages\Seed;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use Engine\Config;


/**
 * Seed.php
 *
 * Command class to upload seeds.
 */
class SeedService
{
    /**
     * Alias for service.
     *
     * @access public
     * @var string
     */
    static public $alias = 'seed';

    /**
     * List of migrations.
     *
     * @access private
     */
    private $_seeds_list;

    /**
     * Static constructor.
     *
     * @access public
     */
    public function __construct()
    {
        $this->_seeds_list = Config::get('seeds');
    }

    /**
     * Create seeds file.
     *
     * @access public
     * @param string $name - Seed`s name
     */
    public function create(string $name): void
    {
        print("creating seed...\n");

        $path = Config::get('env')['seeds'];
        $date = date("m_d_Y_H_i_s");
        $file = "{$path}/{$name}_{$date}.php";
        $content =
/** @lang php&sql */
<<<EOT
<?php

namespace Database\Seeds;

use Engine\ITransaction;
use Engine\Decorators\RawSQL;

/**
 * {$name}_{$date}.php
 *
 * Seeding for ...
 */
class {$name}_{$date} implements ITransaction
{
    
    /**
     * Performs seeding
     *
     */
    public static function commit() {
        RawSQL::fetch('SELECT * FROM `table`');
    }
    
    /**
     * Revert all seeds
     *
     */
    public static function revert() {
        RawSQL::fetch('SELECT * FROM `table`');
    }
}
EOT;

        file_put_contents($file, $content);

        print("seed has been created.\n");
    }

    /**
     * Inserting seeds.
     *
     * @access public
     */
    public function do(): void
    {
        print("Uploading seeds...\n");

        foreach ($this->_seeds_list as $seed) {

            if (!in_array(ITransaction::class, class_implements($seed))) {
                return;
            }

            print("Uploading $seed\n");
            $seed::commit();

            $error = RawSQL::error();
            if ($error[0] != "00000")
                dump($error);
        }

        print("Seeds have been uploaded.\n");
    }

}
