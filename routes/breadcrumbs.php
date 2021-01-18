<?php

use Tabuna\Breadcrumbs\Trail;

Breadcrumbs::for('test', fn(Trail $trail) => $trail->parent('dashboard')->push('Test', route('test'))
);
