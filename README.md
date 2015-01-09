Perch Composite Slug Field Type
===============================

A Perch CMS field type for creating composite slugs.

# Requirements

* PHP 5.3+
* Perch CMS v2.4.9+

# Installation

Copy `perch/addons/fieldtypes/compslug` into your project `$PERCH/addons/fieldtypes` directory.

# Usage

To use the fieldtype, add into your template as follows:

```html
<perch:content id="slug" type="compslug" for="lastname firstname" suppress="true" />
```