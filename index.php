<?php
/**
 * RBZ JSON Resume
 *
 * @package           RBZ_JSON_Resume
 * @author            RBZ Digital
 * @copyright         2024 RBZ Digital
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       JSON Resume for WordPress by RBZ Digital
 * Plugin URI:        https://www.rbz.digital/pt-br/blog/json-resume-wordpress-plugin
 * Description:       JSON Resume for WordPress is an open source plugin that makes it easy to create resumes in JSON format.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            RBZ Digital
 * Author URI:        https://www.rbz.digital
 * Text Domain:       rbz-json-resume
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/rbz-digital/json-resume-wordpress-plugin
 */

require_once __DIR__ . '/vendor/autoload.php';
use RbzDigital\RbzJsonResume\JsonResume;
$message = new JsonResume();
echo $message->sayHello();
