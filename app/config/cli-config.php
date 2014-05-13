<?php

// cli-config.php
$entityManager = App::make('EntityManager');

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);