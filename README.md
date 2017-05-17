## Synopsis

Pet Shop is a micro project built in PHP (v5.6) as part of homework. This doesn't connect/store in to any physical database.
Though the detailed folder structure is explained in the next section, main.php can be directly accessed from the web browser.

## Motivation

This project is created to demonstrate my understanding, designing, coding, testing and documentation skills. 

## Directory Structure

Root level will have the following directories and files:

**docs**          - index.html under this folder will represent in detail class declarations

**pseudo**        - Contains pseudo files provided initially

**sql**           - sql file of the project database

**src**           - Core classes required for this project

**tests**         - Test cases for the classes, can be run with phpUnit

**translations**  - Initial translations converting pseudo code to PHP script

**vendor**        - Any third party tools to support Namespaces, phpUnit, documentation etc.

**composer.json** - To download require packages for Unit tests, Documentation, Namespace support etc.

**homework.docx** - Initially provided document outlining the project and tasks

**Readme.md**     - README file, outlines the overview of the project


## Installation

You should have a typical PHP environment like LAMP. Extract the project zip to the web root and src directory is the root of the project.

One can access src/main.php and src/petShop.php to run the script and the output is displayed. 

## Class Reference

Detailed Classes and their declarations can be viewed at docs/index.html
phpdocumentor package is used to generate this, but it is removed form the vendor directory after document generation just to avoid sending bulky code. However composer.json is provided in the root of the project folder to get phpdocumentor if required.

## Tests

Unit test cases are provided in 'tests' folder. To verify, these scripts are to be run in phpunit framework.
One way to get phpunit is to run composer update in the root folder of the project to get the framework in the vendor folder.

## Developer notes

*Environment and tools*
PHP - Version 5.6

Apache - Version 2.0


## WWW (What, Why and Ways)
### Namespacing

What - Used composer tool to generate autoload class to achieve namespacing

Why - Namespaces are introduced in version 5.3 and it is a cleaner way to use files from different packages

Ways - Alternate ways to use this is to write own autoload class, which can conflict specially when there are multiple classes with same name. OR we can include each file with the path, which is a file specific and can include additional class mentioned in the file

### Animal Class

What - Animal abstract class is fatter

Why - Since most of the common properties are shared by Cat and Dog, I though it better to push to the Animal class rather than duplicating the code.

Ways - Alternatively, we can create behaviourial class to push all the behaviour related methods and implement those in the Cat and Dog classes.

### Logger Class

What - Created own light weight logger class to log information only untill script execution.

Why - Since it is a micro project to zip and send, I prefer to keep it simple just to demonstrate the concept rather than having bulky logger package.

Ways - Alternatively, we have lot of open source logger packages available which can store right from execution information, db queries, execution times, statistics and much more which are helpful in performance tuining too. Ex: monolog, phpdebugbar

### Database

What - Created single table to store all animal information.

Why - Since we are not actually inserting the objects here and the categories are limited to only 2 types.

Ways - Alternatively, we can have split the animals table to add 2 more tables where in the animal type can be a different table and its id will be a foreign key to the animals table instead of storing string in type field of animals table. Also, previous names can be a seperate table to store rather than saving the array in JSON encoded string. These changes can be performed based on the timeline and scope to further additions.

### Test Cases

What - Used PHPUnit framework

Why - To execute and verify the test cases, PHPUnit framework is downloaded form composer

Ways - I could have written my own test class to assert the results, again it depends on the timeline of the project.


