<?php
/**
 * Legacy plugin for phpMussel.
 *
 * PLUGIN INFORMATION BEGIN
 *         Plugin Name: Legacy.
 *       Plugin Author: Caleb M / Maikuolan.
 *      Plugin Version: 1.0.1
 *    Download Address: https://github.com/phpMussel/plugin-legacy
 *     Min. Compatible: 1.0.0-DEV
 *     Max. Compatible: -
 *        Tested up to: 1.0.0-DEV
 *       Last Modified: 2016.05.29
 * PLUGIN INFORMATION END
 *
 * This is a very simple plugin intended to serve as a bridge between the
 * function-style implementation of phpMussel v0 and the closure-style
 * implementation of phpMussel v1. It provides backwards-compatibility for any
 * phpMussel users that make calls to phpMussel v0 functions from within their
 * CMS, forums, websites, etc, that wish to upgrade to phpMussel v1 (which uses
 * closures instead of functions) but which don't wish to update all their
 * function calls to closure calls. It does this by redeclaring functions using
 * the names of former v0 functions that call their new v1 closure
 * counterparts.
 *
 * Any phpMussel users that don't make calls to phpMussel v0 functions from
 * within their CMS, forums, websites, etc, won't and shouldn't use this
 * plugin, because it won't be of any benefit to them. Please note, too, that
 * this plugin will only provide for the former `phpMusselR()` and
 * `phpMussel()` functions; Because the former `phpMussel_mail()` function has
 * been deprecated and removed from v1, there is nothing to be bridged to from
 * here. A separate plugin will be developed to serve as a replacement for this
 * function.
 */

/**
 * Prevents direct access (the plugin should only be called from the phpMussel
 * plugin system).
 */
if (!defined('phpMussel')) {
    die('[phpMussel] This should not be accessed directly.');
}

/**
 * Since v1, we generally try to avoid globals whenever possible, but this is
 * required for compatibility with v0 functions.
 */
global $phpMussel;

/** The core scanning function. */
function phpMussel($f = '', $n = false, $zz = false, $dpt = 0, $ofn = '') {
    global $phpMussel;
    return $phpMussel['Scan']($f, $n, $zz, $dpt, $ofn);
}

/** The recursor function. */
function phpMusselR($f = '', $n = false, $zz = false, $dpt = 0, $ofn = '') {
    global $phpMussel;
    return $phpMussel['Recursor']($f, $n, $zz, $dpt, $ofn);
}
