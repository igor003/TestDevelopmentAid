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
            ->select('j.location, j.id')
            ->distinct()
            ->getQuery()
            ->getResult();
         $categories = $this->em->getRepository('App\Entities\Category')->createQueryBuilder('c')
             ->select('c.name, c.id')
             ->getQuery()
             ->getResult();
        return view('welcome',['locations'=>$locations,'categories'=>$categories]);

    }

    public function get_jobs(Request $request){
        $jobs = $this->em->getRepository('App\Entities\Job')->createQueryBuilder('j')
            ->select(['j','c'])
            ->innerJoin('j.category', 'c' );
        if($request->input('categories')){
            $jobs->andWhere('c.id IN (:ids)')
                 ->setParameter('ids', $request->input('categories') );
        }
        if($request->input('locations')){
            $jobs->andWhere('j.location IN (:location)')
                ->setParameter('location', $request->input('locations') );
        }
        if($request->input('search')){
            $jobs->andWhere('j.name LIKE :search OR j.content LIKE :search')
            ->setParameter('search', '%'.$request->input('search').'%' );
        }
        if($request->input('dateFrom')){
            $jobs->andWhere('j.date > :from')
                ->setParameter('from', date('Y-m-d H:i:s', strtotime($request->input('dateFrom'))));
        }
        if($request->input('dateUntil')){
            $jobs->andWhere('j.date < :until')
                ->setParameter('until',date('Y-m-d H:i:s', strtotime($request->input('dateUntil'))));
        }

        $jobsList = $jobs->getQuery()
            ->getArrayResult();
        return json_encode($jobsList);
    }
}
