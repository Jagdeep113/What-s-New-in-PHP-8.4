<?php 

pcntl_async_signals(true);

pcntl_signal(SIGTERM, function() {
    echo "Received SIGTERM\n";
    // Perform cleanup or other tasks
});

// Simulate sending a SIGTERM signal
posix_kill(posix_getpid(), SIGTERM);