# EZMap plugin for Craft CMS 3.x

[EZ Map](https://ezmap.co) integration for Craft CMS

## Requirements

This plugin requires Craft CMS 3.0.20 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require billythekid/ezmap

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for EZMap.

## EZMap Overview

This plugin adds an EZ Map field for you to automatically position your EZ Map created maps on your site.

## Configuring EZMap

Add your EZ Map email address and API Key to the plugin's settings to connect your account.

## Using EZMap

Choose the EZ Map field type in your fieldlayout. You'll then be able to choose any of your saved maps from a dropdown.

To output a map in a twig template use `{{ craft.eZMap.map(yourFieldNameHere) }}`. 

For example if you added a field with the handle ezMap to an entry: `{{ craft.eZMap.map(entry.ezMap) }}`

