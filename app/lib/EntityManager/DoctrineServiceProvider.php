<?php

namespace EntityManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Illuminate\Support\ServiceProvider;

class DoctrineServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind('EntityManager', function() {

            // Create a simple "default" Doctrine ORM configuration for Annotations
            
            $isDevMode = true;
            $config = Setup::createAnnotationMetadataConfiguration(array(app_path().'/config/doctrine.php'), $isDevMode);

            // database configuration parameters
            $conn = array(
                'driver' => 'pdo_mysql',
            );

            // obtaining the entity manager
            $entityManager = EntityManager::create($conn, $config);

            return $entityManager;

        });


    }

}