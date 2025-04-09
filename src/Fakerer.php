<?php

declare(strict_types=1);

namespace Jphat\Fakerer;

class Fakerer
{
    /**
     * Get a random household item from a specified category.
     *
     * @param  string|null  $category  The category of the household item.
     * @return string A random household item.
     *
     * @throws \InvalidArgumentException If the category is invalid.
     */
    public function householdItem(?string $category = null): string
    {
        $items = [
            'kitchen' => [
                'blender', 'bowls', 'coffee maker', 'cups', 'cutting board',
                'dish rack', 'dish soap', 'frying pan', 'glasses', 'knife set',
                'knives', 'microwave', 'mugs', 'oven mitts', 'plates',
                'refrigerator', 'saucepan', 'silverware', 'stove', 'toaster',
                'trash can', 'tupperware',
            ],
            'living-room' => [
                'area rug', 'bookshelf', 'candles', 'coffee table', 'couch',
                'end tables', 'entertainment center', 'lamp', 'recliner',
                'remote control', 'sofa', 'speakers', 'throw blanket',
                'throw pillows', 'tv', 'vase', 'wall art',
            ],
            'bedroom' => [
                'alarm clock', 'bed sheets', 'bed', 'blankets', 'closet hangers',
                'closet organizers', 'clothes iron', 'desk chair', 'desk',
                'dresser', 'full-length mirror', 'ironing board', 'laundry basket',
                'mattress', 'nightstand', 'pillows',
            ],
            'bathroom' => [
                'bath mat', 'bathroom cleaner', 'bathroom scale', 'conditioner',
                'hair brush', 'hair dryer', 'plunger', 'robe', 'scale', 'shampoo',
                'shaving kit', 'shower curtain', 'soap', 'toilet brush',
                'toilet paper', 'toothbrush holder', 'toothbrush', 'toothpaste',
                'towel rack', 'towels',
            ],
            'laundry-room' => [
                'clothespins', 'dryer', 'drying rack', 'fabric softener', 'iron',
                'ironing board', 'laundry basket', 'laundry detergent',
                'washing machine',
            ],
            'hallway' => [
                'coat rack', 'doormat', 'keys', 'shoe rack', 'shoes', 'umbrella',
            ],
            'garage' => [
                'broom', 'bucket', 'drill', 'dustpan', 'extension cord',
                'garden tools', 'hammer', 'hose', 'ladder', 'lawn mower', 'mop',
                'nails', 'power tools', 'rake', 'screwdrivers', 'screws', 'shovel',
                'tape measure', 'toolbox', 'workshop bench', 'wrench',
            ],
        ];

        if ($category === null) {
            $allItems = array_merge(...array_values($items));

            return $allItems[array_rand($allItems)];
        }

        if (! array_key_exists($category, $items)) {
            throw new \InvalidArgumentException("Invalid category: $category");
        }

        return $items[$category][array_rand($items[$category])];
    }
}
