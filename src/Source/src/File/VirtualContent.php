<?php

/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phplrt\Source\File;

use Phplrt\Contracts\Source\FileInterface;

/**
 * Class VirtualContent
 */
class VirtualContent extends Content implements FileInterface
{
    /**
     * @var string
     */
    private string $pathname;

    /**
     * VirtualContent constructor.
     *
     * @param string $pathname
     * @param string $content
     */
    public function __construct(string $pathname, string $content)
    {
        $this->pathname = $pathname;

        parent::__construct($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getPathname(): string
    {
        return $this->pathname;
    }
}
