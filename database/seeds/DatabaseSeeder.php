<?php

use App\Entities\Job;
use Illuminate\Database\Seeder;
use App\Entities\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =['category1','category2','category3','category4','category5'];

        $jobs = [
            [
                'name'=>'Constructor',
                'location'=>'Balti',
                'content'=>'dsfsdfsdf',
                'time' =>'12.10.2017'
            ],
            [
                'name'=>'Programist',
                'location'=>'Chisinau',
                'content'=>'dsfsffffffdfsdf',
                'time' =>'12.10.2017'
            ],
            [
                'name'=>'Teacher',
                'location'=>'Razina',
                'content'=>'dsfsffffffdfsdf',
                'time' =>'12.10.2017'
            ],
            [
                'name'=>'Manedger',
                'location'=>'Falesti',
                'content'=>'dsfsddd123213dfsdf',
                'time' =>'02.12.2017'
            ],
            [
                'name'=>'Administrator',
                'location'=>'Straseni',
                'content'=>'dsfsd12312312dd123213dfsdf',
                'time' =>'02.02.2017'
            ]
        ];

        $categoryEntities = [];
        foreach($categories as $category){
            $categoryEntity= new Category;
            $categoryEntity->setName($category);
            EntityManager::persist($categoryEntity);
            $categoryEntities[] = $categoryEntity;
        }

        foreach($jobs as $job){
            $jobEntity = new Job;
            $jobEntity->setName($job['name']);
            $jobEntity->setLocation($job['location']);
            $jobEntity->setDate(new DateTime());
            $jobEntity->setContent($job['content']);
            $jobEntity->setCategory( $categoryEntities[array_rand($categoryEntities)]);
            EntityManager::persist($jobEntity);
        }

        EntityManager::flush();
    }
}
