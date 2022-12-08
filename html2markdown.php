<?php

    echo "\n";

    if (isset($argv[1])){

        $path = $argv[1];

        $glob = array_merge(glob($path.'/*.html'), glob($path.'/*/*.html'), glob($path.'/*/*/*.html'));

        if (empty($glob)){
            echo 'Sorry, HTML not found.'."\n";
            exit(1);
        }

        foreach ($glob as $key => $value) {
            $pathinfo = pathinfo($value);
            $html = $pathinfo['dirname'].'/'.$pathinfo['filename'].'.md';
            $cmd = 'html2text '.$value.' sjis > '.$html;

            exec($cmd, $opt, $return);

            if ($return === 0){
                file_put_contents($html, str_replace('.html', '.md', file_get_contents($html)));
                echo 'Successful convert '.$value."\n".
                     '               --> '.$html."\n\n";
            } else {
                echo 'Failed to convert '.$value."\n".
                     '              --> '.$html."\n\n";
            }
        }

        echo 'Comverted.'."\n";

    } else {
        echo 'Sorry, Not Args.'."\n";
    }

    echo "\n";
