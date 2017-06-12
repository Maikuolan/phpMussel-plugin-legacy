## **What is phpMussel?**

An ideal solution for shared hosting environments, where it's often not possible to utilise or install conventional anti-virus protection solutions, phpMussel is a PHP script designed to **detect trojans, viruses, malware and other threats** within files uploaded to your system wherever the script is hooked, based on the signatures of [ClamAV](https://www.clamav.net/) and others. For information regarding *HOW TO INSTALL* {2A+2B} and *HOW TO USE* {3A+3B} phpMussel, please refer either to the [Wiki](https://github.com/phpMussek/phpMussel/wiki) or to documentation included within the "[_docs](https://github.com/phpMussel/phpMussel/tree/master/_docs)" directory of [this repository](https://github.com/phpMussel/phpMussel) (direct links to that documentation included under the "Documentation" header below this paragraph).

---

## **What's this repository for?**

This repository, "plugin-legacy", is the repository for a very simple plugin intended to serve as a bridge between the function-style implementation of phpMussel v0 and the closure-style implementation of phpMussel v1. It provides backwards-compatibility for any phpMussel users that make calls to phpMussel v0 functions from within their CMS, forums, websites, etc, that wish to upgrade to phpMussel v1 (which uses closures instead of functions) but which don't wish to update all their function calls to closure calls. It does this by redeclaring functions using the names of former v0 functions that call their new v1 closure counterparts.

Any phpMussel users that don't make calls to phpMussel v0 functions from within their CMS, forums, websites, etc, won't and shouldn't use this plugin, because it won't be of any benefit to them. Please note, too, that this plugin will only provide for the former `phpMusselR()` and `phpMussel()` functions; Because the former `phpMussel_mail()` function has been deprecated and removed from v1, there is nothing to be bridged to from here. A separate plugin will be developed to serve as a replacement for this function.

The core phpMussel repository: [phpMussel](https://github.com/phpMussel/phpMussel).

This repository: [plugin-legacy](https://github.com/phpMussel/plugin-legacy).

---

## **How to install?**

Upload the "legacy" directory of this repository and all its contents to the "plugins" directory of your phpMussel installation (the "plugins" directory is a sub-directory of the "vault" directory).

That's everything! :-)

---

*This file, "README.md", last edited: 12th June 2017 (2017.06.12).*
