<?php

namespace App\Http\Controllers;
use App\Entities\Job;
use Doctrine\ORM\EntityManager;


use Doctrine\ORM\Query\Expr\Join;
use Illuminate\Http\Request;

class JobController extends Controller
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function index(){
        $locations = $this->em->getRepository('App\Entities\Job')->createQueryBuilder('j')
            ->select('j.location')
            ->distinct()
            ->getQuery()
            ->getResult();
        return view('welcome',['locations'=>$locations]);

    }

    public function get_jobs(){
//        $jobs = $this->em->getRepository('App\Entities\Job')->findAll();
        $jobs = $this->em->getRepository('App\Entities\Job')->createQueryBuilder('j')
            ->select(['j','c'])
            ->innerJoin('j.category', 'c' )
            ->getQuery()
            ->getArrayResult();

//        $jobsEntities = [];

//        foreach($jobs as $job){
//            $jobDate = [];
//            $jobDate['name'] = $job->getName();
//            $jobDate['location'] = $job->getLocation();
//            $jobDate['date'] = $job->getDate()->format('Y-m-d H:i:s');
//            $jobDate['category'] = $job->getCategory()->getName();
//            $jobsEntities[] = $jobDate;
//        }
        return json_encode($jobs);
    }
}
