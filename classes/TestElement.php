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
 * esapigui file description here.
 *
 * @package    esapigui
 * @copyright  2022 neko <admin@nekochaninc.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace customfield_esapigui;

use HTML_QuickForm_element;

class TestElement extends  HTML_QuickForm_element{
    /**
     * @var bool
     */
    private $isTeacher;

    public function __construct($elementName){
        global $USER, $COURSE, $PAGE, $DB;
        
        parent::__construct($elementName);
        
        $this->isTeacher = false;
        $roleId = $DB->get_record('role', array("archetype" => "editingteacher"), "id")->id;
        $contextId = $PAGE->context->id;
        $userId = $USER->id;
        if($DB->get_record('role_assignments', array("roleid" => $roleId, "contextid" => $contextId, "userid" => $userId)) != false){
            $this->isTeacher = true;
        }
    }
    
    public function toHtml(): string {
        global $USER, $COURSE, $PAGE, $DB;
        //return "<div style='background: red'>USER: {$USER->id} - COURSE: {$COURSE->id} - CONTEXT: {$PAGE->context->id} - ISTEACHER: {$this->isTeacher}</div>";
        if($this->isTeacher)
        return "<iframe src='https://itcube54.ru/local/eschoolapi/course_settings.php' width='500' height='600' style='border: none'></iframe>";
        else
            return '';
    }
}
