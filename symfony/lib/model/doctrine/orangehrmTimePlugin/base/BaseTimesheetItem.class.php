<?php

/**
 * BaseTimesheetItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $timesheetItemId
 * @property integer $timesheetId
 * @property integer $employeeId
 * @property integer $projectId
 * @property integer $activityId
 * @property date $date
 * @property integer $duration
 * @property string $comment
 * @property Timesheet $Timesheet
 * @property Project $Project
 * @property ProjectActivity $ProjectActivity
 * @property Employee $Employee
 * 
 * @method integer         getTimesheetItemId() Returns the current record's "timesheetItemId" value
 * @method integer         getTimesheetId()     Returns the current record's "timesheetId" value
 * @method integer         getEmployeeId()      Returns the current record's "employeeId" value
 * @method integer         getProjectId()       Returns the current record's "projectId" value
 * @method integer         getActivityId()      Returns the current record's "activityId" value
 * @method date            getDate()            Returns the current record's "date" value
 * @method integer         getDuration()        Returns the current record's "duration" value
 * @method string          getComment()         Returns the current record's "comment" value
 * @method Timesheet       getTimesheet()       Returns the current record's "Timesheet" value
 * @method Project         getProject()         Returns the current record's "Project" value
 * @method ProjectActivity getProjectActivity() Returns the current record's "ProjectActivity" value
 * @method Employee        getEmployee()        Returns the current record's "Employee" value
 * @method TimesheetItem   setTimesheetItemId() Sets the current record's "timesheetItemId" value
 * @method TimesheetItem   setTimesheetId()     Sets the current record's "timesheetId" value
 * @method TimesheetItem   setEmployeeId()      Sets the current record's "employeeId" value
 * @method TimesheetItem   setProjectId()       Sets the current record's "projectId" value
 * @method TimesheetItem   setActivityId()      Sets the current record's "activityId" value
 * @method TimesheetItem   setDate()            Sets the current record's "date" value
 * @method TimesheetItem   setDuration()        Sets the current record's "duration" value
 * @method TimesheetItem   setComment()         Sets the current record's "comment" value
 * @method TimesheetItem   setTimesheet()       Sets the current record's "Timesheet" value
 * @method TimesheetItem   setProject()         Sets the current record's "Project" value
 * @method TimesheetItem   setProjectActivity() Sets the current record's "ProjectActivity" value
 * @method TimesheetItem   setEmployee()        Sets the current record's "Employee" value
 * 
 * @package    orangehrm
 * @subpackage model\time\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTimesheetItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_timesheet_item');
        $this->hasColumn('timesheet_item_id as timesheetItemId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('timesheet_id as timesheetId', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('employee_id as employeeId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('project_id as projectId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('activity_id as activityId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('duration', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('comment', 'string', 2000, array(
             'type' => 'string',
             'length' => 2000,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Timesheet', array(
             'local' => 'timesheetId',
             'foreign' => 'timesheetId',
             'onDelete' => 'cascade'));

        $this->hasOne('Project', array(
             'local' => 'projectId',
             'foreign' => 'project_id',
             'onDelete' => 'cascade'));

        $this->hasOne('ProjectActivity', array(
             'local' => 'activityId',
             'foreign' => 'activity_id',
             'onDelete' => 'cascade'));

        $this->hasOne('Employee', array(
             'local' => 'employeeId',
             'foreign' => 'empNumber',
             'onDelete' => 'cascade'));
    }
}