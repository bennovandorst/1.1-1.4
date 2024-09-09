<?php

$cities = ['Amsterdam', 'Rotterdam', 'Utrecht', 'Breda'];

echo $cities[0];
echo end($cities);

$cities[] = 'Eindhoven';
echo end($cities);