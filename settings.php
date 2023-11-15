<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     local_shopping_cart
 * @category    admin
 * @copyright   2021 Wunderbyte GmbH<info@wunderbyte.at>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use local_adele\admin_setting_course_tags;
use local_shopping_cart\admin_setting_taxcategories;
use local_shopping_cart\shopping_cart;

defined('MOODLE_INTERNAL') || die();

$componentname = 'local_adele';

// Default for users that have site config.
if ($hassiteconfig) {
    // Add the category to the local plugin branch.
    $settings = new admin_settingpage('local_adele_settings', '');
    $ADMIN->add('localplugins', new admin_category($componentname, get_string('pluginname', $componentname)));
    $ADMIN->add($componentname, $settings);

    // Checkbox options.
    $settings->add(
        new admin_setting_configmulticheckbox($componentname . '/multicheck',
                get_string('activefilter', $componentname),
                get_string('activefilter_desc', $componentname), '', [
                    'only_subscribed' => 'Only courses the theatcher is subscribed to.',
                    'all_courses' => 'All courses meeting the other criterias.'
                ]));

    // Included tags.
    $settings->add(
            new admin_setting_course_tags(
                    $componentname . '/includetags',
                    get_string('tagsinclude', $componentname),
                    get_string('tagsinclude_desc', $componentname),
                    'none',
                    PARAM_TEXT
            )
    );

    // Excluded tags.
    $settings->add(
        new admin_setting_course_tags(
                $componentname . '/excludetags',
                get_string('tagsexclude', $componentname),
                get_string('tagsexclude_desc', $componentname),
                'none',
                PARAM_TEXT
        )
    );

    // Category level.
    $categories = core_course_category::make_categories_list();
    $settings->add(new admin_setting_configmultiselect(
                $componentname . '/catfilter',
                get_string('categories', $componentname),
                get_string('categories_desc', $componentname),
                [],
                $categories)
    );
}
