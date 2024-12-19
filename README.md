# Workaround for b7757

## Installation
```
composer require oxid-support/b7757
./vendor/bin/oe-console oe:module:activate oxs_b7757
```

## Dev Installation
```
git clone https://github.com/oxid-support/b7757.git repo/oxs/b7757
composer config repositories.oxs/b7757 path repo/oxs/b7757
composer require oxid-support/b7757
./vendor/bin/oe-console oe:module:activate oxs_b7757
```