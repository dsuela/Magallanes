<?php
/*
 * This file is part of the Magallanes package.
 *
 * (c) Andrés Montañez <andres@andresmontanez.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mage\Command;

use Mage\Runtime\RuntimeInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\Console\Command\Command;

/**
 * Abstract base class for Magallanes Commands
 *
 * @author Andrés Montañez <andresmontanez@gmail.com>
 */
abstract class AbstractCommand extends Command
{
    /**
     * @var RuntimeInterface Current Runtime instance
     */
    protected $runtime;

    /**
     * Set the Runtime configuration
     *
     * @param RuntimeInterface $runtime Runtime container
     * @return AbstractCommand
     */
    public function setRuntime(RuntimeInterface $runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Logs a message
     *
     * @param string $message
     * @param string $level
     */
    public function log($message, $level = LogLevel::DEBUG)
    {
        $this->runtime->log($message, $level);
    }
}
