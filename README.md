git-template
============

This project aims to provide collection of git hooks or recipes to validate code push etc. 
To utilize this template in your system follow Installation. 

CURRENT FEATURES
================

PHP File Validation 
  * CodeSniffer runs based on drupal standards. Throws Warning.
  * Checks Linting against php -l . Throws Fatal error. 

JS File Validation 
  * Looks for console.log . Throws Fatal error

INSTALLATION
========

$git clone https://github.com/neotohin/git-template.git ~/.git-template
$git config --global init.templatedir '~/git-template'

SCREENSHOTS
======
As of July 4, 2014

![GIT Template](http://i.imgur.com/PMflTlT.png)
