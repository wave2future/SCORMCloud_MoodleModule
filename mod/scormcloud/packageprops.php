<?php

/*
 *   Copyright 2011 Rustici Software.
 *
 *   This file is part of the SCORM Cloud Module for Moodle.
 *   https://github.com/RusticiSoftware/SCORMCloud_MoodleModule
 *   http://scorm.com/moodle/
 *
 *   The SCORM Cloud Module is free software: you can redistribute it and/or
 *   modify it under the terms of the GNU General Public License as published
 *   by the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   The SCORM Cloud Module is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with the SCORM Cloud Module.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once("../../config.php");
require_once('SCORMCloud_PHPLibrary/ScormEngineService.php');
require_once('SCORMCloud_PHPLibrary/ServiceRequest.php');
require_once('SCORMCloud_PHPLibrary/CourseData.php');
require_once('locallib.php');

global $CFG;

$courseid = required_param('id', PARAM_INT);   // course id

$ScormService = scormcloud_get_service();
$courseService = $ScormService->getCourseService();
$cssurl = $CFG->wwwroot . '/mod/scormcloud/packageprops.css';

echo '<script language="javascript">window.location.href = "'.$courseService->GetPropertyEditorUrl($courseid, $cssurl, null).'";</script>';

?>