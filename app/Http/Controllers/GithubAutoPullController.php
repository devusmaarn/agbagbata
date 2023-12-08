<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GithubAutoPullController extends Controller
{
    public function __invoke(Request $request){
         /**
         * GIT DEPLOYMENT SCRIPT
         *
         * Used for automatically deploying websites via GitHub
         *
         */

        // array of commands
        $commands = array(
            'echo $PWD',
            'whoami',
            'git pull',
            'git status',
            'git submodule sync',
            'git submodule update',
            'git submodule status',
        );

        // exec commands
        $output = '';
        foreach($commands AS $command){
            $tmp = shell_exec($command);
            
            $output .= "<span style=\"color: #6BE234;\">\$</span><span style=\"color: #729FCF;\">{$command}\n</span><br />";
            $output .= htmlentities(trim($tmp)) . "\n<br /><br />";
        }
    }
}
