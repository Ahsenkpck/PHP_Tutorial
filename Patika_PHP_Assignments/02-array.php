<pre style="font-size:18px;">
<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function random_array($array, $value)
{
    $filtered_array = array_filter($array);
    $randomized_array = array_rand($filtered_array, $value);
    $result = array_map(function ($item) use ($filtered_array) {
        return $filtered_array[$item];
    }, $randomized_array);
    return $result;
}

print_r(random_array($planets, 2));
print_r(random_array($planets, 3));
print_r(random_array($planets, 2));
print_r(random_array($planets, 4));
print_r(random_array($planets, 5));


?>
</pre>