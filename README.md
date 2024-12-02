# Custom extension basics

Shows the integration of custom extensions and basic workflows. (TYPO3 CMS)

## What does it do?

1.0.0: Registered minimal extension in the TYPO3 project

1.1.0: Added table structure, model, repository and TCA config for "Impressions" ("Analyze database" required)

1.2.0: Added translation files (XLIFF files) and translated labels in TCA config

1.3.0: Added controller, plugin registration and necessary files/templates

1.4.0: Fetching data from repository and giving it to view/templates

1.5.0: Added reusable fluid snippet (Partial)

1.6.0: Using "sys_categories" within extension

1.7.0: Adding styles/javascript to templates (AssetCollector)

1.8.0: Added usage of FlexForms

## Installation

Add via composer:

    composer require "passionweb/extension-basics"

* Install the extension via composer
* Flush TYPO3 and PHP Cache

## Requirements

This example uses no 3rd party libraries.

## Extension settings

There are no extension settings available.

## Troubleshooting and logging

If something does not work as expected take a look at the log file.
Every problem is logged to the TYPO3 log (normally found in `var/log/typo3_*.log`)

## Achieving more together or Feedback, Feedback, Feedback

I'm grateful for any feedback! Be it suggestions for improvement, requests or just a (constructive) feedback on how good or crappy this snippet/repo is.

Feel free to send me your feedback to [service@passionweb.de](mailto:service@passionweb.de "Send Feedback") or [contact me on Slack](https://typo3.slack.com/team/U02FG49J4TG "Contact me on Slack")
