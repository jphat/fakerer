# Household Item Generator

The household item generator is one of the core features of Fakerer. It provides a simple way to generate random household items for various categories.

## Basic Usage

```php
// Get any random household item
$item = fakerer()->householdItem();

// Get a random item from a specific category
$kitchenItem = fakerer()->householdItem('kitchen');
```

## Available Categories

The `householdItem()` method accepts an optional category parameter. If provided, it will return a random item from that specific category. If not provided, it will return a random item from any category.

### Kitchen Items

```php
$kitchenItem = fakerer()->householdItem('kitchen');
```

Available kitchen items:
- blender
- bowls
- coffee maker
- cups
- cutting board
- dish rack
- dish soap
- frying pan
- glasses
- knife set
- knives
- microwave
- mugs
- oven mitts
- plates
- refrigerator
- saucepan
- silverware
- stove
- toaster
- trash can
- tupperware

### Living Room Items

```php
$livingRoomItem = fakerer()->householdItem('living-room');
```

Available living room items:
- area rug
- bookshelf
- candles
- coffee table
- couch
- end tables
- entertainment center
- lamp
- recliner
- remote control
- sofa
- speakers
- throw blanket
- throw pillows
- tv
- vase
- wall art

### Bedroom Items

```php
$bedroomItem = fakerer()->householdItem('bedroom');
```

Available bedroom items:
- alarm clock
- bed sheets
- bed
- blankets
- closet hangers
- closet organizers
- clothes iron
- desk chair
- desk
- dresser
- full-length mirror
- ironing board
- laundry basket
- mattress
- nightstand
- pillows

### Bathroom Items

```php
$bathroomItem = fakerer()->householdItem('bathroom');
```

Available bathroom items:
- bath mat
- bathroom cleaner
- bathroom scale
- conditioner
- hair brush
- hair dryer
- plunger
- robe
- scale
- shampoo
- shaving kit
- shower curtain
- soap
- toilet brush
- toilet paper
- toothbrush holder
- toothbrush
- toothpaste
- towel rack
- towels

### Laundry Room Items

```php
$laundryRoomItem = fakerer()->householdItem('laundry-room');
```

Available laundry room items:
- clothespins
- dryer
- drying rack
- fabric softener
- iron
- ironing board
- laundry basket
- laundry detergent
- washing machine

### Hallway Items

```php
$hallwayItem = fakerer()->householdItem('hallway');
```

Available hallway items:
- coat rack
- doormat
- keys
- shoe rack
- shoes
- umbrella

### Garage Items

```php
$garageItem = fakerer()->householdItem('garage');
```

Available garage items:
- broom
- bucket
- drill
- dustpan
- extension cord
- garden tools
- hammer
- hose
- ladder
- lawn mower
- mop
- nails
- power tools
- rake
- screwdrivers
- screws
- shovel
- tape measure
- toolbox
- workshop bench
- wrench

## Error Handling

If an invalid category is provided, the method will throw an `\InvalidArgumentException`:

```php
try {
    $item = fakerer()->householdItem('invalid-category');
} catch (\InvalidArgumentException $e) {
    // Handle the exception
    echo $e->getMessage(); // "Invalid category: invalid-category"
}
```
