<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Handler;

use Symfony\Component\Messenger\Envelope;

/**
 * Marker interface for message handlers to configure if auto ACK is disabled.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
interface ConfigureAutoAckInterface
{
    public function disableAutoAck(Envelope $envelope): bool;
}
