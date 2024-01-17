<?php

namespace Madtechservices\ThemeMadmin;

use Backpack\CRUD\ThemeServiceProvider;

class AddonServiceProvider extends ThemeServiceProvider
{
    protected string $vendorName = 'madtechservices';
    protected string $packageName = 'theme-madmin';
}
