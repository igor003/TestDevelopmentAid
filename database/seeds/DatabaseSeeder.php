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
        $categories =['IT','Construction','Design','Serving staff','Medicine'];

        $jobs = [
            [
                'name'=>'PHP Developer',
                'location'=>'Balti',
                'content'=>'A PHP Developer writes beautiful, fast PHP to a high standard, in a timely and scalable way that improves the code-base of our products in meaningful ways.You will be a part of a full-stack creative team that is responsible for all aspects of the ongoing software development from the initial specification, through to developing, testing and launching.',
                'time' =>'01.10.2015 08:20:33',
                'category'=>0,
            ],
            [
                'name'=>'JAVA Developer',
                'location'=>'Chisinau',
                'content'=>'We are looking for a Java Developer with experience in building high-performing, scalable, enterprise-grade applications.You will be part of a talented software team that works on mission-critical applications. Java developer roles and responsibilities include managing Java/Java EE application development while providing expertise in the full software development lifecycle, from concept and design to testing.',
                'time' =>'09.01.2016 03:57:59',
                'category'=>0,
            ],
            [
                'name'=>'C++ Developer',
                'location'=>'Razina',
                'content'=>'C++ is a general purpose, multi-paradigm programming language. C++ developers often work on both desktop and mobile applications, as well as software that interacts with low-level system and hardware resources. Developers can use C++ to build native modules and applications for a number of platforms, such as Android using Android NDK. C++, being a difficult language to master, requires a developer to spend much time with it.',
                'time' =>'01.05.2017 12:20:06',
                'category'=>0,
            ],
            [
                'name'=>'JavaScipt Developer',
                'location'=>'Falesti',
                'content'=>'A JavaScript developer is responsible for implementing the front-end logic that defines the behavior of the visual elements of a web application. A JavaScript developer is also responsible for connecting this with the services that reside on the back-end. They are usually supported by back-end web developers, who are responsible for server-side application logic. JavaScript developers often work alongside other front-end web developers who specialize in markup and styling.',
                'time' =>'02.12.2017 10:20:00',
                'category'=>0,
            ],
            [
                'name'=>'Python Developer',
                'location'=>'Balti',
                'content'=>'A Python Web Developer is responsible for writing server-side web application logic. The Python language comes in two variations: Python 2 and Python 3. However, this distinction is seldom required to be made, since a good Python developer can easily adapt to the differences. Python web developers usually develop back-end components, connect the application with the other third-party web services, and support the front-end developers by integrating their work with the Python application.',
                'time' =>'26.09.2016 10:20:09',
                'category'=>0,
            ],
            [
                'name'=>'Architect',
                'location'=>'Chisinau',
                'content'=>'An architect is someone who plans, designs, and reviews the construction of buildings. To practice architecture means to provide services in connection with the design of buildings and the space within the site surrounding the buildings, that have as their principal purpose human occupancy or use.[1] Etymologically, architect derives from the Latin architectus, which derives from the Greek (arkhi-, chief + tekton, builder)',
                'time' =>'02.02.2017 10:20',
                'category'=>1,
            ],
            [
                'name'=>'Structural engineer',
                'location'=>'Balti',
                'content'=>'Structural engineers analyze, design, plan, and research structural components and structural systems to achieve design goals and ensure the safety and comfort of users or occupants. Their work takes account mainly of safety, technical, economic and environmental concerns, but they may also consider aesthetic and social factors.Structural engineering is usually considered a specialty discipline within civil engineering, but it can also be studied in its own right. In the United States, most practicing structural engineers are currently licensed as civil engineers, but the situation varies from state to state. Some states have a separate license for structural engineers which is required to design special or high risk structures such as schools, hospitals, or skyscrapers',
                'time' =>'08.05.2016 24:00:53',
                'category'=>1,
            ],
            [
                'name'=>'Painter',
                'location'=>'Chisinau',
                'content'=>'We are looking for a skilled Painter to paint the interior and exterior of structures, buildings and other surfaces. Your job will be important since good painting has both practical and aesthetic benefits.An excellent painter is knowledgeable in selecting the right material for their job. They have experience in painting with various tools and in various heights and spaces while observing all safety measures. They must be reliable and deft as well as possess great attention to detail in completing their duties.',
                'time' =>'20.08.2016 07:06:01',
                'category'=>1,
            ],
            [
                'name'=>'Advertising Designer',
                'location'=>'Orchei',
                'content'=>'An advertising designer works with an agency, group, firm or organization to produce effective campaigns for ads. They work closely with clients and companies to convey a message using type, photography, illustration and color. An advertising designer may choose to work within several media, such as in print or Web. They research trends to see what works for customers. Ad designers must have a keen eye for details and a creative mind. They are required to adhere to strict deadlines and may be required to work irregular hours.',
                'time' =>'04.07.2016 22:10:34',
                'category'=>2,
            ],
            [
                'name'=>'Landscape Designer',
                'location'=>'Chisinau',
                'content'=>'Landscape architects create the landscapes and plan, design and manage open spaces including both natural and built environments. Their work provides innovative and aesthetically-pleasing environments for people to enjoy, while ensuring that changes to the natural environment are appropriate, sensitive and sustainable.',
                'time' =>'23.12.2016 16:34:54',
                'category'=>2,
            ],
            [
                'name'=>'Carpenter',
                'location'=>'Falesti',
                'content'=>'We are looking for a qualified Carpenter to cut, fabricate and install wooden and other structures according to specifications. Your job will entail working in diverse settings to produce steady and functional infrastructure and products. A carpenter is an individual with great hand dexterity and an eye for detail. The ideal candidate will also have good knowledge of wood properties and other carpentry materials. Working with little supervision while following all health and safety standards is essential.',
                'time' =>'01.01.2017 12:23:12',
                'category'=>2,
            ],
            [
                'name'=>'Interior Designer',
                'location'=>'Chisinau',
                'content'=>'We are looking for an artful Interior designer to undertake a variety of space designing projects. You will deal with design from conceptual development and liaising with the stakeholders to managing and executing the design. The goal is to design practical spaces but yet visually pleasing.',
                'time' =>'27.04.2017 19:46:49',
                'category'=>2,
            ],
            [
                'name'=>'Web Designer',
                'location'=>'Chisinau',
                'content'=>'A web designer is responsible for creating the design and layout of a website or web pages. It and can mean working on a brand new website or updating an already existing site. Their role is different to web developers, who specialise in making web designs a reality or writing code that dictates how different parts of the website fit together. However, there can be crossover between the two roles.',
                'time' =>'15.04.2017 20:11:34',
                'category'=>0,
            ],
            [
                'name'=>'Bartender',
                'location'=>'Chisinau',
                'content'=>'First of all, the bartender maintains the cleanliness of the establishment. In some situations, a bar will employ a janitor or cleaning crew to come through on a regular basis and provide a deep clean, but generally speaking it is up to the bartender and his or her trusty bar-back to handle all of the sweeping, mopping, cleaning tables and behind the bar, and so forth. For the most part bartending is a messy job, so if you aren’t willing to get a bit down and dirty it might not be for you.',
                'time' =>'10.06.2017 13:11:34',
                'category'=>3,
            ],
            [
                'name'=>'Waiter',
                'location'=>'Balti',
                'content'=>'Waiter/Waitress responsibilities include greeting and serving customers, providing detailed information on menus, multi-tasking various front-of-the-house duties and collecting the bill. If you are able to perform well in fast-paced environments, we’d like to meet you. To be a successful Waiter or Waitress, you should be polite with our customers and make sure they enjoy their meals. You should also be a team player and be able to effectively communicate with our Kitchen Staff to make sure orders are accurate and delivered promptly.',
                'time' =>'04.11.2016 16:27:55',
                'category'=>3,
            ],
            [
                'name'=>'Hostess',
                'location'=>'Chisinau',
                'content'=>'A hostess performs a first tier job; this means that any customer coming into a restaurant or hotel will be greeted by a hostess initially. Possessing the role of first contact, a hostess position is extremely important as a customer will deem the rest of the hospitality setting as good or bad as initially portrayed.',
                'time' =>'10.02.2016 23:17:12',
                'category'=>3,
            ],
            [
                'name'=>'Physiotherapist',
                'location'=>'Balti',
                'content'=>'Physiotherapists work with a variety of patients including physically disabled children, women before and after giving birth, athletes, industrial employees, patients who are in hospital or attending clinics and people within the community.',
                'time' =>'30.01.2016 15:45:15',
                'category'=>4,
            ],
            [
                'name'=>'Ophthalmologist',
                'location'=>'Falesti',
                'content'=>'Almost as hard to pronounce as it is to spell, an ophthalmologist is quite simply an eye doctor. Nope, they aren’t the guys who test your eyesight and fit you with lenses (that’s an optometrist for the record), an ophthalmologist is a medically trained doctor who is an expert in diagnosing and treating eye diseases and injuries.',
                'time' =>'02.01.2017 12:00:15',
                'category'=>4,
            ],
            [
                'name'=>'Dermatologists',
                'location'=>'Rezina',
                'content'=>'Dermatologists are medical doctors who diagnose and treat ailments of the largest organ of the human body and advise patients on achieving healthy and attractive skin. During patient visits, dermatologists take medical histories and use a dermoscope, or magnifying or illuminated device, to detect abnormalities or malignancies. They might use diagnostic techniques, such as biopsies, to identify diseases and determine appropriate therapies. Areas of specialization include cosmetic dermatology; pediatric dermatology; and dermatopathology, or the study of skin diseases.',
                'time' =>'25.12.2016 13:23:15',
                'category'=>4,
            ],
            [
                'name'=>'Dentist',
                'location'=>'Chisinau',
                'content'=>'We are looking for a competent Program Coordinator to undertake a variety of administrative and program management tasks. You will help in planning and organizing programs and activities as well as carry out important operational duties.To be an excellent program coordinator, you must be organized and detail-oriented, comfortable working with diverse teams. If you have further skills in program development and human resources support, we’d like to meet you.The goal will be to facilitate the effective management of programs according to the organization’s standards.',
                'time' =>'01.08.2016 10:13:15',
                'category'=>4,
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
            $jobEntity->setDate(new DateTime($job['time']));
            $jobEntity->setContent($job['content']);
            $jobEntity->setCategory( $categoryEntities[$job['category']]);
            EntityManager::persist($jobEntity);
        }

        EntityManager::flush();
    }
}
