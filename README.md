# Work Planner

## MVP

Display a work planner timeline with
	Date by week
	A list of tasks
Allow the user to add tasks and change their start/stop times

## Database structure

weeks table
    id
    year
    week number
    start date
    many to one with task weeks

tasks table
    id
    many to one with task weeks

task weeks table
    id
    week_id
    task_id
    many to many with resources

resource
    id
    name
    initials
    many to many with task weeks

task week resource join table
    resource id
    task week id









Display timeline
Summary of resource against week for each person
Package breakdown
Package
Task
Sub-task
Etc
Estimate for each bit
Activities
Design/Scoping
Dev
Etc
Colour-coding by activity
Break tasks down into different activities
Show resources for each task for each week
Show when resource unavailable (holidays)
Show overall ‘titles’
Testing/migration
Contingency etc
Show national holidays
Xmas, New Year etc

Work actuals
Summary of the display timeline

Log
Add comments against each week

Admin
Create structure for the above
Create resources (users)
Configure display
Colours
Labels
Archive Package

Users
Add holidays
Add/edit email
Receive email at start of week with a summary of what they’re working on

Undo/redo
Snapshots

Link to trello?
