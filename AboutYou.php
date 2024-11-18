<?php
function generateSong() {
    $lyrics = [
        ["Do you think I have forgotten?\n", 4.0],
        ["Do you think I have forgotten?\n", 6.0],
        ["Do you think I have forgotten?\n", 5.0],
        ["About you?\n", 6.0],
        ["There was something about you that now I can't remember\n", 4.0],
        ["It's the same thing that made my heart surrender\n", 5.0],
        ["And I'll miss you on a train, I'll miss you in the morning'\n", 5.0],
        ["I never know what to think about\n", 4.0],
        ["I think about you\n", 6.0],
        ["About you\n", 4.0]
    ];
    foreach ($lyrics as $line) {
        echo $line[0];
        usleep($line[1] * 1000000);
    } 
    }
generateSong();
?>