<?php

use Jphat\Fakerer\Fakerer;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns a random household item from a specified category', function () {
    $fakerer = new Fakerer;

    $item = $fakerer->householdItem('kitchen');
    $this->assertContains($item, [
        'blender', 'bowls', 'coffee maker', 'cups', 'cutting board',
        'dish rack', 'dish soap', 'frying pan', 'glasses', 'knife set',
        'knives', 'microwave', 'mugs', 'oven mitts', 'plates',
        'refrigerator', 'saucepan', 'silverware', 'stove', 'toaster',
        'trash can', 'tupperware',
    ]);
});

it('throws an exception for an invalid category', function () {
    $fakerer = new Fakerer;

    $this->expectException(InvalidArgumentException::class);
    $fakerer->householdItem('invalid-category');
});

it('returns a random household item from any categories when no category is specified', function () {
    $fakerer = new Fakerer;

    $item = $fakerer->householdItem();
    $this->assertIsString($item);
});
