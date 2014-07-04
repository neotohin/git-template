<?php

/**
 * PHP file checker for system
 */
class phpCheck{

  public static function run($file){

    // If file is removed from git do not sniff.
    if ( ! file_exists($file))
    {
        continue;
    }

    $lint_output = array();

    // Run the sniff
    exec("phpcs --standard=Drupal " . escapeshellarg($file), $lint_output, $return_phpcs);
    if( $return_phpcs != 0 ) {
      echo implode("\n", $lint_output) , "\n";
      Colors::showInfo( "Code Sniffer Report: $file");
    }
    $lint_output = array();


    // Run php lint
    exec("php -l " . escapeshellarg($file), $lint_output, $return_lint);


    if( $return_lint == 0 ) {
        return 0;
    }
    echo implode("\n", $lint_output), "\n";
    Colors::showError( "PHP Parse Error: $file");

    return 1;
  }

}
