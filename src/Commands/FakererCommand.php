<?php

declare(strict_types=1);

namespace Jphat\Fakerer\Commands;

use Illuminate\Console\Command;
use Jphat\Fakerer\Fakerer;

class FakererCommand extends Command
{
    public $signature = 'fakerer
                        {type? : The type of fake data to generate (e.g., household)}
                        {--category= : The category to filter by (e.g., kitchen, bathroom)}';

    public $description = 'Generate fake data using Fakerer';

    protected Fakerer $fakerer;

    public function __construct(Fakerer $fakerer)
    {
        parent::__construct();
        $this->fakerer = $fakerer;
    }

    public function handle(): int
    {
        $type = $this->argument('type');

        if (! $type) {
            $this->showHelp();

            return self::SUCCESS;
        }

        if ($type === 'household') {
            $category = $this->option('category');
            $item = $this->fakerer->householdItem($category);
            $this->info('Random household item'.($category ? " ($category)" : '').": $item");

            return self::SUCCESS;
        }

        $this->error("Unknown type: $type");

        return self::FAILURE;
    }

    protected function showHelp(): void
    {
        $this->info('Available Fakerer Commands:');
        $this->line('');
        $this->line('  php artisan fakerer household             Generate a random household item');
        $this->line('  php artisan fakerer household --category=kitchen    Generate a random kitchen item');
        $this->line('');
        $this->line('Supported categories for household items:');
        $this->line('  kitchen, living-room, bedroom, bathroom, laundry-room, hallway, garage');
    }
}
