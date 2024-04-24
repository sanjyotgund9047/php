<?php
// Load the XML file
$xml = simplexml_load_file("cricket.xml");

// Array to store player data
$players = array();

// Loop through each player node in the XML
foreach ($xml->children() as $player) {
    // Get player name, runs, and wickets
    $name = (string) $player->player;
    $runs = (int) $player->runs;
    $wickets = (int) $player->wickets;

    // Store player data in the array
    $players[] = array(
        'name' => $name,
        'runs' => $runs,
        'wickets' => $wickets
    );
}

// Display data of players who have scored more than 100 runs
echo "Players who have scored more than 100 runs:\n";
foreach ($players as $player) {
    if ($player['runs'] > 100) {
        echo "Name: {$player['name']}, Runs: {$player['runs']}, Wickets: {$player['wickets']}\n";
    }
}
?>
