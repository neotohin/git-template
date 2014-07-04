git-template
============

This project aims to provide collection of git hooks or recipes to validate code push etc. 
To utilize this template in your system follow Installation. 

CURRENT FEATURES
================



PHP File Validation in pre-commit
  * CodeSniffer runs based on drupal standards. Throws Warning.
  * Checks Linting against php -l . Throws Fatal error. 
 
JS File Validation in pre-commit
  * Looks for console.log . Throws Fatal error

INSTALLATION
========

$git clone https://github.com/neotohin/git-template.git ~/.git-template   
$git config --global init.templatedir '~/git-template'    

Initiate a new project in your system. That will have all hooks from this template.


SCREENSHOTS
======
As of July 4, 2014

![GIT Template](http://i.imgur.com/PMflTlT.png)
