<?php
/**
 * HYPERPC - The shop of powerful computers.
 *
 * This file is part of the HYPERPC package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package     HYPERPC
 * @license     Proprietary
 * @copyright   Proprietary https://hyperpc.ru/license
 * @link        https://github.com/HYPER-PC/Composer-Cleanup".
 * @author      Sergey Kalistratov <kalistratov.s.m@gmail.com>
 */

namespace HyperPc\Composer\Cleanup;

/**
 * Class Rules
 *
 * @package HyperPc\Composer\Cleanup
 */
class Rules
{

    /**
     * Rule list.
     *
     * @return array
     */
    public static function getRules()
    {
        // Default patterns for common files
        $docs = [
            'LICENSE*',
            'README*',
            'readme*',
            'CHANGELOG*',
            'CHANGES*',
            'FAQ*',
            'CONTRIBUTING*',
            'HISTORY*',
            'UPGRADING*',
            'UPGRADE*',
            'package*',
            'demo',
            'example',
            'examples',
            'doc',
            'docs',
            'readme*',
        ];

        $tests = [
            '.travis.yml',
            '.scrutinizer.yml',
            '.codeclimate.yml',
            '.coveralls.yml',

            'phpunit.*',
            'phpunit-*',

            'test',
            'tests',
            'Tests',
            'example',
            'examples',
            '*.md',

            'travis',

            'demo.php',
            'test.php',
        ];

        $system = [
            '.gitignore',
            '.idea',
            '.git',
            '.gitattributes',
            '.phpstorm.meta.php',
            'composer.json',
            'pimple.json',
            '.editorconfig',
            'Makefile'
        ];

        return [
            // JBZoo pack
            'jbzoo/assets'               => [$docs, $tests, $system],
            'jbzoo/console'              => [$docs, $tests, $system],
            'jbzoo/crosscms'             => [$docs, $tests, $system],
            'jbzoo/data'                 => [$docs, $tests, $system],
            'jbzoo/event'                => [$docs, $tests, $system],
            'jbzoo/html'                 => [$docs, $tests, $system],
            'jbzoo/image'                => [$docs, $tests, $system, ['build']],
            'jbzoo/less'                 => [$docs, $tests, $system],
            'jbzoo/lang'                 => [$docs, $tests, $system],
            'jbzoo/path'                 => [$docs, $tests, $system],
            'jbzoo/pimpledumper'         => [$docs, $tests, $system],
            'jbzoo/profiler'             => [$docs, $tests, $system],
            'jbzoo/simpletypes'          => [$docs, $tests, $system],
            'jbzoo/sqlbuilder'           => [$docs, $tests, $system],
            'jbzoo/utils'                => [$docs, $tests, $system],

            'jbzoo/jbdump'               => [$docs, $tests, $system, [
                'joomla', 'logs', 'tools', '_template.php', 'favicon.ico', 'htaccess.example',
                'index.php', 'init.php.example', 'styles.less',
            ]],

            // Others
            'symfony/yaml'              => [$docs, $tests, $system],
            'symfony/css-selector'      => [$docs, $tests, $system],
            'symfony/polyfill-mbstring' => [$docs, $tests, $system],
            'symfony/process'           => [$docs, $tests, $system],
            'symfony/console'           => [$docs, $tests, $system],
            'symfony/var-dumper'        => [$docs, $tests, $system],

            'dompdf/dompdf'             => [$docs, $tests, $system],
            'phenx/php-font-lib'        => [$docs, $tests, $system],
            'phenx/php-svg-lib'         => [$docs, $tests, $system],
            'sabberworm/php-css-parser' => [$docs, $tests, $system],

            'oyejorge/less.php'          => [$docs, $tests, $system, ['bin']],
            'abeautifulsite/simpleimage' => [$docs, $tests, $system],
            'pimple/pimple'              => [$docs, $tests, $system, ['ext', 'src/Pimple/Tests']],

            // System
            'jbzoo/composer-cleanup'     => [$docs, $tests, $system],
        ];
    }
}
