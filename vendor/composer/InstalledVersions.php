<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.10.2',
      'version' => '0.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '459f2781e1a08d52ee56b0b1444086e038561e3f',
    ),
    'dflydev/dot-access-data' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.6',
      'version' => '2.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f88dcf4b14af14a98ad96b14b2b317969eab6715',
    ),
    'fruitcake/php-cors' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a878d45c1914464426dc94da61c9e1d36ae262a8',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/collections' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/conditionable' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/macroable' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/testing' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.41.0',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v9.41.0',
      'version' => '9.41.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc902ce61b4ca08ca7449664cfab2fa96a1d1e28',
    ),
    'laravel/serializable-closure' => 
    array (
      'pretty_version' => 'v1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '47afb7fae28ed29057fdca37e16a84f90cc62fae',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '2.3.7',
      'version' => '2.3.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a36bd2be4f5387c0f3a8792a0d76b7d68865abbf',
    ),
    'league/config' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '3.10.3',
      'version' => '3.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '8013fb046c6a244b2b1b75cc95d732ed6bcdeb8a',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '720488632c590286b88b80e62aa3d3d551ad4a50',
    ),
    'mtdowling/cron-expression' => 
    array (
      'replaced' => 
      array (
        0 => '^1.0',
      ),
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.63.0',
      'version' => '2.63.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad35dd71a6a212b98e4b87e97389b6fa85f0e347',
    ),
    'nette/schema' => 
    array (
      'pretty_version' => 'v1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
    ),
    'nette/utils' => 
    array (
      'pretty_version' => 'v3.2.8',
      'version' => '3.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '02a54c4c872b99e4ec05c4aec54b5a06eb0f6368',
    ),
    'nunomaduro/termwind' => 
    array (
      'pretty_version' => 'v1.14.2',
      'version' => '1.14.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a8218511eb1a0965629ff820dda25985440aefc',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
        1 => '1.0.0 || 2.0.0 || 3.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cccc74ee5e328031b15640b51056ee8d3bb66c0a',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.6.0',
      'version' => '4.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad63bc700e7d021039e30ce464eba384c4a1d40f',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.6.0',
      ),
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0b910724a0a0326b4481e4f8a30abb2dd442efb',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab2746acddc4f03a7234c8441822ac5d5c63efe9',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f000c166cb3ee32c4c822831a79260a135cd59b5',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.0.9',
      'version' => '6.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c85b58422865d42c6eb46f7693339056db098a8',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7bc61cc2db649b4637d331240c5346dcc7708051',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '09cb683ba5720385ea6966e5e06be2a34f2568b1',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a93829f4043fdcddebabd8433bdb46c2dcaefe06',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '22c820abe601e7328b56cec86626617139266f48',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '5eaa3f1404cafa842e953ae16c35757b7356fb32',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v6.0.14',
      'version' => '6.0.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c01b88b63418131daf2edd0bdc17fc8a6d1c939a',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
    ),
    'symfony/polyfill-uuid' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v6.0.11',
      'version' => '6.0.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '44270a08ccb664143dede554ff1c00aaa2247a43',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b7384fad32c6d0e1919b5bd18a69fbcfc383508',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd78d39c1599bd1188b8e26bb341da52c3c6d8a66',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.0.15',
      'version' => '6.0.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '51ac0fa0ccf132a00519b87c97e8f775fa14e771',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v6.0.14',
      'version' => '6.0.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '6f99eb179aee4652c0a7cd7c11f2a870d904330c',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acbfbb274e730e5a0236f619b6168d9dedb3e282',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3|3.0',
      ),
    ),
    'symfony/uid' => 
    array (
      'pretty_version' => 'v6.0.13',
      'version' => '6.0.13.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db426b27173f5e2d8b960dd10fa8ce19ea9ca5f3',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v6.0.14',
      'version' => '6.0.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '72af925ddd41ca0372d166d004bc38a00c4608cc',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.5',
      'version' => '2.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4348a3a06651827a27d989ad1d13efec6bb49b19',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.5.0',
      'version' => '5.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
