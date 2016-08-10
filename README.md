# IReplace Twig filter

Simple Twig filter to enable |ireplace case insensitive alternative to |replace.

## Installation

1.  Upload the ireplace/ folder to your craft/plugins/ folder.
2.  Go to Settings > Plugins from your Craft control panel and enable the ireplace plugin.

## Usage

Unlike Craft's |replace, there is only one way to use |ireplace:

```
    {{ entry.fieldname|ireplace('Search','Replacement') }}
````
This example would find and replace Search, SEARCH, search, etc. Arrays and regex are not supported yet.

## Credits
http://stackoverflow.com/a/28721285/321922
https://github.com/antcooper/nl2li

## Changelog

### 0.1

* Initial release