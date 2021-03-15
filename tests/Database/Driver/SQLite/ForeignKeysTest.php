<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Database\Tests\Driver\SQLite;

/**
 * @group driver
 * @group driver-sqlite
 */
class ForeignKeysTest extends \Spiral\Database\Tests\ForeignKeysTest
{
    public const DRIVER = 'sqlite';
}
