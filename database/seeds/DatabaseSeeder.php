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
         $categoryLength = count($categories);
        $categoryEntities = [];
        for($cnt = 0;$cnt==$categoryLength; $cnt++){
            $categoryEntities[] = new Category();
        }
        foreach($categories as $category){

    }



        $category1 = new Category();
        $category1->setName('Category 1');
        EntityManager::persist($category1);

        $category2 = new Category();
        $category2->setName('Category 2');
        EntityManager::persist($category2);

        $category3 = new Category();
        $category3->setName('Category 3');
        EntityManager::persist($category3);

        $category4 = new Category();
        $category4->setName('Category 4');
        EntityManager::persist($category4);

        $category5 = new Category();
        $category5->setName('Category 5');
        EntityManager::persist($category5);

        $job1 = new Job();
        $job1->setName('constructor');
        $job1->setLocation('dfsdfd');
        $job1->setDate(new DateTime());
        $job1->setContent('vgsdgpsdgpsdgfff');
        $job1->setCategory($category1);
        EntityManager::persist($job1);

        $job1 = new Job();
        $job1->setName('constructor');
        $job1->setLocation('dfsdfd');
        $job1->setDate(new DateTime());
        $job1->setContent('vgsdgpsdgpsdgfff');
        $job1->setCategory($category1);
        EntityManager::persist($job1);


        EntityManager::flush();
    }
}
