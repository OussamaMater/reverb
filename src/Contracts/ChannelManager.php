<?php

namespace Laravel\Reverb\Contracts;

use Illuminate\Support\Collection;
use Laravel\Reverb\Application;
use Laravel\Reverb\Channels\Channel;

interface ChannelManager
{
    /**
     * Get the application instance.
     */
    public function app(): ?Application;

    /**
     * The application the channel manager should be scoped to.
     */
    public function for(Application $application): ChannelManager;

    /**
     * Get all the channels.
     */
    public function all(): Collection;

    /**
     * Find the given channel.
     */
    public function find(string $channel): Channel;

    /**
     * Get all the connections for the given channels.
     */
    public function connections(string $channel = null): Collection;

    /**
     * Unsubscribe from all channels.
     */
    public function unsubscribeFromAll(Connection $connection): void;

    /**
     * Flush the channel manager repository.
     */
    public function flush(): void;
}
