<?php
// Using a mutex to protect the counter
$mutex = new \[Mutex]
function incrementCounter(){
    global $counter, $mutex;
    $mutex->lock();
    $counter++;
    $mutex->unlock();
}

$counter = 0;
for ($i = 0; $i < 1000; $i++) {
    incrementCounter();
}
echo "Counter: " . $counter;
?> 