# Theme MADmin

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides a theme for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel, that uses Tailwind CSS v3. MADmin is easy to customise with well commented and documented CSS files, which can be easily edited if you don't like them. The MADmin Settings package for backpack allows easy customisation of MADmin all from your Backpack admin panel. A frontend edition of the MADmin theme is coming and will integrate with Laravel Jetstream.

## Screenshots

Add image of MADmin here...
![all-layouts](https://user-images.githubusercontent.com/33960976/230347568-36f1a08e-6ee5-4534-ace3-9c4b259ca754.gif)


## Installing

### Automatic installation
Not currently available.

### Manual installation

**Step 1.** Install via Composer

``` bash
composer require madtechservices/theme-madmin
```

**Step 2.** Go to `config/backpack/ui.php` and change your view namespace:

```diff
-    'view_namespace' => 'backpack::',
+    'view_namespace' => 'backpack.theme-madmin::',
```

**Step 3. (Optional)** Publish the theme config file:

```bash
php artisan vendor:publish --tag="theme-madmin-config"
```

## Config
Note: Any value set here will override the ones defined in config/backpack/ui.php when this theme is in use.

**Change layout:** Simply pick a layout
```php
/**
 * Possible values: horizontal, horizontal_dark, vertical, vertical_dark, horizontal_custom, vertical_custom
 * Note: horizontal_custom and vertical_custom need to be used with madmin-settings package for backpack which 
 * makes the theme configurable in your backpack admin panel.
 */
'layout' => 'horizontal_custom',
```

**Change auth layout:** Pick a login page layout
```php
'auth_layout' => 'default', //Possible values: default, illustration, cover, clean, video
```

**Add CSS:** Here you can easily load your own extra CSS styles.

```php
'styles' => [
  base_path('vendor/backpack/theme-madmin/resources/assets/css/color-adjustments.css'),
  base_path('vendor/backpack/theme-madmin/resources/assets/css/colors.css'),
 // add your css here
],
```

**Add JS:** Here you can easily include your own JS files.

```php
'scripts' => [],
```

**More configs:** Get more out of theme-madmin.

## Credits

- [MadTech Services][link-author]


```
php artisan backpack:require:theme-madmin
```


**More configs:** Get more out of theme-madmin by using madmin-settings package. Visit the madmin-settings package repo at [https://github.com/madtechservices/madmin-settings](https://github.com/madtechservices/madmin-settings)
- Configure theme defaults such as  `Light Mode, Dark Mode or System`
- Add logos from your backpack admin panel
- Custom layouts for popular backpack packages such as backpack-permissions, backpack-backup, backpack-filemanager and more.
- Integrate with Laravel packages such as Jetstream, Breeze, Telescope, Debugbar and more.
- Customise your them colours easily.
- Select fonts for your theme
- Choose how `Header`, `Sidebar` should be displayed
- Add custom footer text and modify other placeholder texts
- Add even more features to your backpack admin by enabling or disabling features in your Backpack Admin Panel via the madmin-settings package.

## Pro Version

- Remove the powered by link in the footer.
- Add your own custom footer text.
- Add your own custom logo to the login page.
- Add your own custom logo to the admin panel.
- Add your own custom favicon.
- Add your own custom fonts.
- Add your own custom css.
- Add your own custom js.
- Add your own custom preloader.
- Add your own custom login page background.
- Add your own custom login page background video.
- Add your own custom login page background image.
- Add your own custom login page background color.
- Add your own custom login page background gradient.
- Add your own custom login page background pattern.
- Add your own custom login page background image opacity.
- Add your own custom login page background video opacity.
- Add your own custom login page background pattern opacity.
- Add your own custom login page background gradient opacity.
- Add your own custom login page background video mute.
- Add your own custom login page background video loop.
- Add your own custom login page background video autoplay.
- Add your own custom login page background video controls.
- Add your own custom login page background video start time.
- Add your own custom login page background video end time.
- Add your own custom login page background video speed.
- Add your own custom login page background video quality.
- Add your own custom login page background video playback rate.
- Add your own custom login page background video playback quality.
- Add your own custom login page background video playback muted.
- Add your own custom login page background video playback loop.
- Add your own custom login page background video playback autoplay.
- Add your own custom login page background video playback controls.
- Add your own custom login page background video playback start time.
- Add your own custom login page background video playback end time.
- Add your own custom login page background video playback speed.
- Add your own custom login page background video playback quality.
- Add your own custom login page background video playback playback rate.
- Add your own custom login page background video playback playback quality.
- Add your own custom login page background video playback playback muted.
- Add your own custom login page background video playback playback loop.
- Add your own custom login page background video playback playback autoplay.
- Add your own custom login page background video playback playback controls.
- Add your own custom login page background video playback playback start time.
- Add your own custom login page background video playback playback end
- Purchase PRO for full whitelabel options and remove the powered by link.
- 

```php
'options' => [
   /**
    * The available color modes.
    */
    'colorModes' => [
        'system' => 'la-desktop',
        'light' => 'la-sun',
        'dark' => 'la-moon',
    ],

    /**
     * The color mode used by default.
     */
    'defaultColorMode' => 'system', // system, light, dark

    /**
     * When true, a switch is displayed to let admins choose their favorite theme mode.
     * When false, the theme will only use the "defaultColorMode" set above.
     * In case "defaultColorMode" is null, system is the default.
     */
    'showColorModeSwitcher' => true,

    /**
     * Fix the top-header component (present in "vertical_transparent") and the menu when the layout type is set as "horizontal".
     * This value is skipped when the layout type is horizontal-overlap, using false as default.
     */
    'useStickyHeader' => true,

    /**
     * When true, the content area will take the whole screen width.
     */
    'useFluidContainers' => true,

    /**
     * When true, the sidebar content for vertical layouts will not scroll with the rest of the content.
     */
    'sidebarFixed' => false,

    /**
     * When true, horizontal layouts will display the classic top bar on top to free some space when multiple nav items are used.
     */
    'doubleTopBarInHorizontalLayouts' => false,
],
```
## Uninstalling

To uninstall this Backpack theme:

1. Remove the composer package. Eg. `composer remove backpack/theme-madmin`
2. Delete the config file. Eg. `rm -rf config/backpack/theme-madmin.php`
3. Install a new theme (eg. `php artisan backpack:require:theme-tabler`) or change the `view_namespace` in `config/backpack/ui.php` to the theme you want to be active. eg. theme-tabler.

## Usage

This package is used by Backpack 6.0, so you don't need to do anything special to use it. Just make sure it's installed, set as your them in `config/backupack/ui.php` and it will be used automatically.

## Customising

To customise this theme, you can publish the config file:

```bash
php artisan vendor:publish --provider="Madtechservices\ThemeMadmin\ThemeMadminServiceProvider" --tag=config
```

This will publish the config file to `config/backpack/theme-madmin.php`. You can modify it as you see fit.

Alternitavely you can install the madmin-settings package for backpack which allows you to customise the theme from your backpack admin panel. Visit the madmin-settings package repo at [https://github.com/madtechservices/madmin-settings](https://github.com/madtechservices/madmin-settings).

## Overriding

If you need to change a blade file in any way, you can easily copy-paste the file to your app, and modify that file any way you want. If you do that to the correct directory, your file will be used instead of the one in the package. But please keep in mind that you will NOT be getting any updates for that file.

The more files you copy-paste and customize, the more difficult it will be to upgrade to newer versions. So please avoid doing this too much.

```bash
# create the custom directory if it's not already there
# mkdir -p resources/views/vendor/backpack/theme-madmin

mkdir -p resources/views/vendor/madtechservices/theme-madmin

# copy the blade file inside the folder we created above
#cp -i vendor/backpack/theme-madmin/resources/views/dashboard.blade.php resources/views/vendor/backpack/theme-madmin/dashboard.blade.php
cp -i vendor/madtechservices/theme-madmin/resources/views/dashboard.blade.php resources/views/vendor/madtechservices/theme-madmin/dashboard.blade.php

```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/madtechservices/theme-madmin/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todo list and howtos.

## Security

If you discover any security related issues, please email support@madtechservices.com.au instead of using the issue tracker.

## Credits

- [Matt Horsley][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/madtechservices/theme-madmin.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/madtechservices/theme-madmin.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/madtechservices/theme-madmin
[link-downloads]: https://packagist.org/packages/madtechservices/theme-madmin
[link-author]: https://github.com/madtechservices
[link-contributors]: ../../contributors
