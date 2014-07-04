<?php

/**
 * Javascript file checker for system
 *
 */
class jsCheck{

  public static function run($file){

    // If file is removed from git do not sniff.
    if ( ! file_exists($file))
    {
        continue;
    }

    $lint_output = array();

    // Run php lint
    exec("grep -i 'console.log' " . escapeshellarg($file), $lint_output, $return_lint);

    if( count($lint_output) ){
      Colors::showError( "\n Console.log exists in : $file");
      return 1;
    }


    return 0;
  }

}
