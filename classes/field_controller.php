<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * ${PLUGINNAME} file description here.
 *
 * @package    ${PLUGINNAME}
 * @copyright  2022 neko <${USEREMAIL}>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace customfield_esapigui;

class field_controller extends \core_customfield\field_controller {
    /**
     * Plugin type
     */
    const TYPE = 'menu';

    public function config_form_definition(\MoodleQuickForm $mform) {

        global $USER;

        $mform->addElement('header', 'header_id', 'header');
        $tf = new TestElement('testE', null);
        $mform->addElement($tf);
        // TODO: Implement config_form_definition() method.
    }
}