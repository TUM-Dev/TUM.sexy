<?php

// please make sure to add your redirects such that the arrays remains sorted alphabetically
class Route {
    private array $routes = [
        '3dui'             => [
            'description' => '3D User Interfaces',
            'moodle_id'   => '75481',
        ],
        'adlr'             => [
            'description' => 'Advanced Deep Learning for Robotics',
            'target'      => 'https://bbaeuml.github.io/tum-adlr/adlr/index.html',
        ],
        'adm'              => [
            'description' => 'Algorithmische Diskrete Mathematik',
            'target'      => 'https://agdm.ma.tum.de/teaching/2019W/adm.html',
        ],
        'advalgs'          => [
            'description' => 'Advanced Algorithms',
            'target'      => 'https://www14.in.tum.de/lehre/2024WS/ada/index.html.en',
        ],
        'advist'           => [
            'description' => 'Advanced Data Handling and Visualization Techniques',
            'target'      => 'https://www.rostlab.org/teaching/WiSe2022-23/advist',
            'moodle_id'   => '84975',
        ],
        'agt'              => [
            'description' => 'Algorithmic Game Theory',
            'target'      => 'https://www.cs.cit.tum.de/en/dss/teaching/summer-semester-2024/algorithmic-game-theory-ss24/',
        ],
        'algebra1'         => [
            'description' => 'Algebra 1',
            'target'      => 'https://www.moodle.tum.de/course/view.php?idnumber=950370507',
        ],
        'all-eat-api'      => [
            'description' => 'All menus for all locations from the eat-api in JSON',
            'target'      => 'https://tum-dev.github.io/eat-api/all.json',
        ],
        'anal'             => [
            'description' => 'Analysis für Informatik',
            'target'      => 'https://campus.tum.de/tumonline/ee/ui/ca2/app/desktop/#/slc.tm.cp/student/courses/950763262',
        ],
        'androidsec'       => [
            'description' => 'Praktikum: Android Security',
            'target'      => 'https://www22.in.tum.de/en/teaching/android-security-lab/',
        ],
        'apollon'         => [
            'description' => 'Apollon UML Modeling Editor',
            'target'      => 'https://apollon.ase.in.tum.de/',
        ],
        'app'              => [
            'description' => 'TUM Campus App',
            'target'      => 'https://www.tum.app/',
        ],
        'arb'          => [
            'description' => 'Arbabi Tutoriums-Website',
            'target'      => 'https://home.in.tum.de/~arb/',
        ],
        'artemis'          => [
            'description' => 'Artemis platform (Applied Software Engineering)',
            'target'      => 'https://artemis.cit.tum.de',
        ],
        'ase'              => [
            'description' => 'Advanced Topics In Software Engineering',
            'target'      => 'https://wwwmatthes.in.tum.de/pages/c9ulr7t9nrqs/Advanced-Topics-of-Software-Engineering',
            'moodle_id'   => '80385',
        ],
        'asp'              => [
            'description' => 'Aspekte der systemnahen Programmierung bei der Spieleentwicklung',
            'target'      => 'https://asp.caps.in.tum.de/login',
        ],
        'asta'             => [
            'description' => 'Studentische Vertretung – AStA',
            'target'      => 'https://www.sv.tum.de/startseite/',
        ],
        'astra'             => [
            'description' => 'A Student Recruiting Application - Tutor Application',
            'target'      => 'https://astra.cit.tum.de',
        ],
        'ausitsec'         => [
            'description' => 'ausgewählte Themen der IT-Sicherheit',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2019/ausgewahlte-themen-aus-dem-bereich-it-sicherheit',
        ],
        'automata'         => [
            'description' => 'Automata and Formal Languages',
            'target'      => 'https://www.cs.cit.tum.de/tcs/lehre/wintersemester-2023-2024/automaten-und-formale-sprachen/',
        ],
        'bf'               => [
            'description' => 'Brückenfest 2022',
            'target'      => 'https://www.instagram.com/p/CcODBH6Lqmv/?igshid=MDJmNzVkMjY=',
        ],
        'bmt'              => [
            'description' => 'Basic Mathematical Tools for Imaging & Visualization',
            'target'      => 'https://ciip.in.tum.de/teaching/bmt_ws22.html',
        ],
        'bptm'              => [
            'description' => 'Business Process Technologies and Management',
            'moodle_id'   => '96125'
        ],
        'c'                => [
            'description' => 'TUM Online',
            'target'      => 'https://campus.tum.de/tumonline/ee/ui/ca2/app/desktop/#/login',
        ],
        'c2'               => [
            'description' => 'Campus Cneipe',
            'target'      => 'https://www.c2.tum.de',
        ],
        'camp1'            => [
            'description' => 'Computer Aided Medical Procedures I',
            'moodle_id'   => '80189',
        ],
        'canteens-eat-api' => [
            'description' => 'A JSON list of all available canteens for the eat-api',
            'target'      => 'https://tum-dev.github.io/eat-api/canteens.json',
        ],
        'carlos'           => [
            'description' => 'Carlos Camino',
            'target'      => 'https://carlos-camino.de',
        ],
        'cbdp'             => [
            'description' => 'Cloud-Based Data Processing',
            'target'      => 'https://db.in.tum.de/teaching/ws2425/clouddataprocessing',
            'moodle_id'   => '80360',
        ],
        'chairs-ce'           => [
            'description' => 'Liste der Computer Engineering Lehrstühle',
            'target'      => 'https://www.ce.cit.tum.de/ce/forschung/professuren/',
        ],
        'chairs-cs'           => [
            'description' => 'Liste der Computer Science Lehrstühle',
            'target'      => 'https://www.cs.cit.tum.de/cs/forschung/professuren/',
        ],
        'chess'      => [
            'description' => 'TUM Chess Club',
            'target'      => 'https://tumchessclub.wixsite.com/tumchessclub/',
        ],
        'cis'                 => [
            'description' => 'Cloud Information Systems',
            'moodle_id'   => '100537',
        ],
        'commuteplanner'  => [
            'description'   => 'Automatische Routenplanung von, zu und zwischen TUM Events direkt im Kalendar',
            'target'        => 'https://github.com/OfficialFreak/tum-commute-planner'
        ],
        'comp'             => [
            'description' => 'Computational Complexity',
            'target'      => 'https://www7.in.tum.de/um/courses/complexity/SS19/',
        ],
        'compiler'         => [
            'description' => 'Compiler Construction',
            'target'      => 'https://www.cs.cit.tum.de/pl/lehre/sommersemester-23/vorlesungen/compiler-construction-1/',
        ],
        'conf'             => [
            'description' => 'TUM-Conf (Zoom)',
            'target'      => 'https://tum-conf.zoom.us',
        ],
        'conpra'           => [
            'description' => 'Practical Course: Algorithms for Programming Contests',
            'target'      => 'https://www.cs.cit.tum.de/tcs/lehre/ss21/practical-course-algorithms-for-programming-contests/',
        ],
        'corona'           => [
            'description' => 'Coronavirus Information',
            'target'      => 'https://www.in.tum.de/fuer-studierende/coronavirus/',
        ],
        'cpp'              => [
            'description' => 'Concepts of C++ programming (IN2377)',
            'target'      => 'https://db.in.tum.de/teaching/ws2425/cpp/',
        ],
        'crypto'           => [
            'description' => 'Kryptographie',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ss-2024/kryptografie',
            'moodle_id' => '96175',
        ],
        'csc'              => [
            'description' => 'Computational Social Choice',
            'target'      => 'https://www.cs.cit.tum.de/en/dss/teaching/winter-semester-2024-25/computational-social-choice-ws-24-25/',
        ],
        'csdcps'           => [
            'description' => 'Concepts and Software Design for Cyberphysical Systems',
            'moodle_id'   => '83237',
        ],
        'cvl'              => [
            'description' => 'Carl von Linde-Akademie Kurse nach Themen',
            'target'      => 'https://www.sot.tum.de/wtg/lehrveranstaltungen/nach-themen/',
        ],
        'cvmvg'            => [
            'description' => 'Computer Vision II: Multiple View Geometry',
            'target'      => 'https://cvg.cit.tum.de/teaching/ss2024/cv2',
        ],
        'cvvm'             => [
            'description' => 'Computer Vision I: Variational Methods',
            'target'      => 'https://cvg.cit.tum.de/teaching/online/cvvm',
        ],
        'db'               => [
            'description' => 'Grundlagen: Datenbanken',
            'target'      => 'https://db.in.tum.de/teaching/ws2425/grundlagen',
        ],
        'dea'              => [
            'description' => 'Studienplan von Data Engineering & Analytics',
            'target'      => 'https://www.cit.tum.de/en/cit/studies/degree-programs/master-data-engineering-and-analytics/',
        ],
        'diversity'        => [
            'description' => 'Diversity & Queer Referat',
            'target'      => 'https://www.sv.tum.de/sv/team/diversityqueer/',
        ],
        'ds'               => [
            'description' => 'Diskrete Strukturen (Moodle-Kurs)',
            'moodle_id'   => '100934',
        ],
	'dsolver'          => [
            'description' => 'DSolver',
            'target'   	  => 'https://www.dsolver.de/',
        ],
        'dwt'              => [
            'description' => 'Diskrete Wahrscheinlichkeitstheorie',
            'target'      => 'https://wwwalbers.in.tum.de/lehre/2024SS/dwt/index.html.de',
        ],
        'ea'               => [
            'description' => 'Efficient Algorithms',
            'target'      => 'https://www14.in.tum.de/lehre/2024WS/ea/index.html',
        ],
        'eat-api'          => [
            'description' => 'eat-api output in a human readable format as well as the base url for eat-api calls',
            'target'      => 'https://tum-dev.github.io/eat-api/',
        ],
        'ecarus'           => [
            'description' => 'E-Mobility der Zukunft: Ingenieurspraxis, Forschungspraxis & Co.',
            'target'      => 'https://www.ecarus.ei.tum.de',
        ],
        'eduroam'          => [
            'description' => 'HowTo: Setup eduroam securely!',
            'target'      => 'https://tum.sexy/eduroam.php',
        ],
        'eidi'            => [
            'description' => 'Einführung in die Informatik (Moodle-Kurs)',
            'moodle_id'   => '100933',
        ],
        'eist'             => [
            'description' => 'Einführung in die Softwaretechnik',
            'target'      => 'https://dse.in.tum.de/teaching/eist-24/',
        ],
        'enigame'          => [
            'description' => 'enigame Puzzle Hunt (Escape Game) Event',
            'target'      => 'https://enig.ma.tum.de',
        ],
        'ent'              => [
            'description' => 'Entrepeneurship',
            'moodle_id'   => '100432',
        ],
        'era'              => [
            'description' => 'Einführung in die Rechnerarchitektur',
            'target'      => 'https://www.ce.cit.tum.de/caps/lehre/wintersemester-24-25/vorlesungen/einfuehrung-in-die-rechnerarchitektur-era/',
            'moodle_id'   => '100633',
        ],
        'erdb'             => [
            'description' => 'Einsatz und Realisierung von Datenbanksystemen',
            'target'      => 'https://db.in.tum.de/teaching/ss24/impldb/',
        ],
        'esn'              => [
            'description' => 'International engagement: ESN TUMi e.V.',
            'target'      => 'https://tumi.esn.world',
        ],
        'eval'             => [
            'description' => 'Evaluation of Lectures',
            'target'      => 'https://evasys.zv.tum.de/evasys/online.php',
        ],
        'evpro'            => [
            'description' => 'Event Processing',
            'target'      => 'https://www.cs.cit.tum.de/dis/teaching/summer-semester-2022/event-processing/',
            'moodle_id'   => '53173',
        ],
        'exzellenz'        => [
            'description' => 'Exzellenz!!1elf',
            'target'      => 'https://shop.tum.de/product/https-shop-tum-de-product-tum-kondom-csd/',
        ],
        'fds'              => [
            'description' => 'Functional Data Structures',
            'target'      => 'https://www21.in.tum.de/teaching/fds/SS24/',
        ],
        'film'             => [
            'description' => 'tu film',
            'target'      => 'https://www.tu-film.de/',
        ],
        'finder'           => [
            'description' => 'Roomfinder',
            'target'      => 'https://www.ph.tum.de/about/visit/roomfinder/',
        ],
        'fpv'              => [
            'description' => 'Functional Programming and Verification',
            'target'      => 'https://www.cs.cit.tum.de/pl/lehre/wintersemester-2122/vorlesungen/functional-programming-and-verification/',
        ],
        'gad'              => [
            'description' => 'Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://campus.tum.de/tumonline/ee/ui/ca2/app/desktop/#/slc.tm.cp/student/courses/950763749',
            'moodle_id'   => '86017',
        ],
        'gadunittests'     => [
            'description' => 'Unit - Tests: Grundlegende Algorithmen und Datenstrukturen',
            'target'      => 'https://github.com/MaximilianAnzinger/gad2022-tests',
        ],
        'gbs'              => [
            'description' => 'Grundlagen: Betriebssysteme und Systemsoftware',
            'target'      => 'https://campus.tum.de/tumonline/ee/ui/ca2/app/desktop/#/slc.tm.cp/student/courses/950763892',
            'moodle_id'   =>   '100579',
        ],
        'ge-ma-sp'         => [
            'description' => 'Studienplan M.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/master-informatik-games-engineering/',
        ],
        'ge-sp'            => [
            'description' => 'Studienplan B.Sc. Informatik: Games Engineering',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/bachelor-informatik-games-engineering/studienplaene/',
        ],
        'ged'              => [
            'description' => 'Game Engine Design',
            'target'      => 'https://www.cs.cit.tum.de/cg/teaching/summer-term-24/realtime-computer-graphics/',
        ],
        'geokalkuele'      => [
            'description' => 'Geometriekalküle',
            'target'      => 'https://www-m10.ma.tum.de/bin/view/Lehre/WS1819/GeometrieKalkueleWS1819',
        ],
        'gin'          => [
            'description' => 'Check out the excellent TUM-Gin',
            'target'      => 'https://shop.tum.de/product/tum-gin/',
        ],
        'git-tut'          => [
            'description' => 'Getting started with Git? Learn the basics for the console. With Visualizations!',
            'target'      => 'https://learngitbranching.js.org',
        ],
        'github'           => [
            'description' => 'Official TUM.sexy Github Repository',
            'target'      => 'https://github.com/TUM-Dev/TUM.sexy',
        ],
        'gitlab'           => [
            'description' => 'The fast way to the LRZ hosted gitlab',
            'target'      => 'https://gitlab.lrz.de/users/sign_in',
        ],
        'gki'              => [
            'description' => 'Grundlagen der Künstlichen Intelligenz',
            'moodle_id'   => '68920',
        ],
        'gog'              => [
            'description' => 'Games on Graphs',
            'target'      => 'https://www.cs.cit.tum.de/tcs/lehre/ss21/games-on-graphs/',
        ],
        'gra'     => [
            'description' => 'Grundlagenpraktikum Rechnerarchitektur',
            'target'      => 'https://gra.caps.in.tum.de/login',
        ],
        'grnvs'            => [
            'description' => 'Grundlagen Rechnernetze und Verteilte Systeme',
            'target'      => 'https://www.net.in.tum.de/teaching/ss24/grnvs.html',
        ],
        'gs'            => [
            'description' => 'DocGS',
            'target'      => 'https://www.docgs.tum.de',
        ],
        'hunger'           => [
            'description' => 'Mensa Speiseplan',
            'target'      => 'https://menu.tum.sexy/',
        ],
        'hyper'            => [
            'description' => 'HyPer DB Webschnittstelle',
            'target'      => 'http://hyper-db.com/interface.html',
        ],
        'i2dl'             => [
            'description' => 'Introduction to Deep Learning',
            'target'      => 'https://cvg.cit.tum.de/teaching/ws2024/i2dl',
        ],
        'ibmi'             => [
            'description' => 'Introduction to Biological and Medical Imaging',
            'target'      => 'http://www.cbi.ei.tum.de/courses/course-in-biological-imaging/',
        ],
        'ieee'             => [
            'description' => 'IEEE Xplore Login',
            'target'      => 'https://ieeexplore.ieee.org/servlet/wayf.jsp?entityId=https://tumidp.lrz.de/idp/shibboleth&url=https%3A%2F%2Fieeexplore.ieee.org',
        ],
        'ifm'              => [
            'description' => 'Investitions- und Finanzmanagement',
            'moodle_id'   => '59135',
        ],
        'ilab1'            => [
            'description' => 'Practical Course: iLab1 - Build your own Internet',
            'target'      => 'https://www.net.in.tum.de/teaching/ws2425/ilab_information.html',
        ],
        'ilab2'            => [
            'description' => 'Practical Course: iLab2 - You set the Focus',
            'target'      => 'https://www.net.in.tum.de/teaching/ws2425/ilab_information.html',
        ],
        'ilabx'            => [
            'description' => 'Practical Course: iLabX - The Virtual Internet Laboratory (block)',
            'target'      => 'https://www.net.in.tum.de/teaching/ws2425/ilab_information.html',
        ],
        'imgtech'          => [
            'description' => 'Medical Imaging Technology',
            'moodle_id'   => '61616',
        ],
        'io'               => [
            'description' => 'Information Officer',
            'target'      => 'https://www.sv.tum.de/sv/team/io/',
        ],
        'itguide'          => [
            'description' => 'detailed overview over it-infrastructure during the studies',
            'target'      => 'https://mpic.fs.tum.de/studium/itguide/',
        ],
        'itsec'            => [
            'description' => 'IT-Sicherheit',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2022/it-sicherheit-in0042',
            'moodle_id'   => '82495',
        ],
        'ja'               => [
            'description' => 'Junge Akademie',
            'target'      => 'https://www.ja.tum.de/ja/start/',
        ],
        'julius'           => [
            'description' => 'Julius Kreutz Tutoriums Website',
            'target'      => 'https://julius-kreutz.de',
        ],
        'kap'              => [
            'description' => 'Klinisches Anwendungsprojekt KAP (Medizin-Anwendungsfach)',
            'target'      => 'https://gist.github.com/Jolly5/6bfe61e2e844e3c1efb56f02e4354cee',
        ],
        'ki'               => [
            'description' => 'Grundlagen der künstlichen Intelligenz',
            'moodle_id'   => '58014',
        ],
	'lambda'           => [
	    'description' => 'Lambda Calculus',
	    'target'      => 'https://www21.in.tum.de/teaching/lambda/WS23/index.html',
            'moodle_id'   => '80136',
	],
        'langenacht'       => [
            'description' => 'Lange Nacht der Univeristäten',
            'target'      => 'https://www.facebook.com/events/2681178088623650/',
        ],
        'linalg'           => [
            'description' => 'Lineare Algebra für Informatik',
            'target'      => 'https://campus.tum.de/tumonline/ee/ui/ca2/app/desktop/#/slc.tm.cp/student/courses/950729947',
        ],
        'live'             => [
            'description' => 'Livestreams und Aufzeichnungen von Vorlesungen',
            'target'      => 'https://live.rbg.tum.de',
        ],
        'logic'           => [
            'description' => 'Logic',
            'target'      => 'https://www21.in.tum.de/teaching/logic/SS22/index.html',
            'moodle_id'   => '89824',
        ],
        'm'                => [
            'description' => 'Moodle',
            'target'      => 'https://www.moodle.tum.de/Shibboleth.sso/Login?providerId=https://tumidp.lrz.de/idp/shibboleth&target=https://www.moodle.tum.de/auth/shibboleth/index.php',
        ],
        'ma-sp'            => [
            'description' => 'Studienplan M.Sc. Informatik',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/master-informatik/studienplaene/',
        ],
        'markov'           => [
            'description' => 'Markovketten',
            'target'      => 'https://www-m5.ma.tum.de/Allgemeines/MA2404_2018W',
            'moodle_id'   => '44962',
        ],
        'matching'         => [
            'description' => 'IN.TUM-Matching-System',
            'target'      => 'https://matching.in.tum.de',
        ],
        'med1'             => [
            'description' => 'Medizin 1',
            'moodle_id'   => '52166',
        ],
        'med2'             => [
            'description' => 'Medizin II (Krankheitslehre, klinische Propädeutik, Einführung in die Medizinische Informatik)',
            'moodle_id'   => '56092',
        ],
        'memes'			  => [
            'description' => 'Exzellente TUM Memes',
            'target'	  => 'https://tumemes.de',
        ],
        'mensabot'         => [
            'description' => 'TUMMensabot für Telegram',
            'target'      => 'https://t.me/TUMMensabot',
        ],
        'mensabot2'        => [
            'description' => 'Hübscher Telegram-MensaBot',
            'target'      => 'https://t.me/MensaMUCBot',
        ],
        'ml'               => [
            'description' => 'Machine Learning',
            'moodle_id'   => '68785',
        ],
        'mobilitaet'      => [
            'description' => 'Referat für Mobilität',
            'target'      => 'https://www.sv.tum.de/sv/team/mobilitaet/',
        ],
        'modsim'           => [
            'description' => 'Modellbildung und Simulation',
            'moodle_id'   => '63516',
        ],
	'moodle-zips'           => [
            'description' => 'Download Zips on Moodle, then sort by pattern',
            'target'      => 'https://github.com/pczern/tum-get',
        ],
        'mvs'              => [
            'description' => 'Mobile Verteilte Systeme',
            'target'      => 'https://www.os.in.tum.de/studium-und-lehre/ss18/mobile-verteilte-systeme/',
            'moodle_id'   => '38940',
        ],
        'nav'        => [
            'description' => 'NavigaTUM - Finde Räume, Gebäude und andere Orte an der TUM mit Exzellenz. Eine moderne Alternative zum RoomFinder, entwickelt von Studierenden.',
            'target'      => 'https://nav.tum.de',
        ],
        'navigatum'        => [
            'description' => 'NavigaTUM - Finde Räume, Gebäude und andere Orte an der TUM mit Exzellenz. Eine moderne Alternative zum RoomFinder, entwickelt von Studierenden.',
            'target'      => 'https://nav.tum.de',
        ],
        'netsec'           => [
            'description' => 'Network Security - Netzsicherheit',
            'target'      => 'https://www.net.in.tum.de/teaching/ws2425/netsec.html',
        ],
        'nix'              => [
            'description' => 'GLÜHNIX',
            'target'      => 'https://www.facebook.com/events/807341503020074/',
        ],
        'nlp'              => [
            'description' => 'Natural Language Processing',
            'moodle_id'   => '80381',
        ],
        'numprog'          => [
            'description' => 'Numerisches Programmieren',
            'moodle_id'   => '100678',
        ],
        'o'                => [
            'description' => 'TUM Opac',
            'target'      => 'https://www.ub.tum.de/tum-opac',
        ],
        'osp'              => [
            'description' => 'Practical Course: Contributing to an Open-Source Project',
            'target'      => 'https://www21.in.tum.de/teaching/osp/WS20/',
        ],
        'paging'            => [
            'description' => 'GBS Paging Trainer',
            'target'      => 'https://vmott42.in.tum.de/paging?iscsv=false&strategy=fifo&frames=4&pages=5&rounds=10',
        ],
        'panopto'          => [
            'description' => 'Panopto Video platform',
            'target'      => 'https://tum.cloud.panopto.eu',
        ],
        'pgdp'             => [
            'description' => 'Praktikum: Grundlagen der Programmierung (Artemis-Kurs)',
            'target'      => 'https://artemis.cit.tum.de/courses/404',
        ],
        'pgdpunittests'     => [
            'description' => 'Unit - Tests: Praktikum Grundlagen der Programmierung',
            'target'      => 'https://github.com/MaximilianAnzinger/pgdp2223-tests',
        ],
        'pgm'              => [
            'description' => 'Probabilistic Graphical Models in Computer Vision',
            'target'      => 'https://cvg.cit.tum.de/teaching/ss2017/pgmcv',
        ],
        'pl'               => [
            'description' => 'Programming Languages',
            'target'      => 'https://www.cs.cit.tum.de/pl/lehre/wintersemester-24-25/vorlesungen/advanced-concepts-of-programming-languages/',
        ],
        'pp'               => [
            'description' => 'Protein Prediction 1',
            'target'      => 'https://www.rostlab.org/teaching/sose18/pp1cs',
        ],
        'pretschi'         => [
            'description' => 'Formerly Known As SexiPretschi.eu',
            'target'      => 'https://tum.sexy/pret/',
        ],
        'pride'            => [
            'description' => 'TUM Diversity & Queer',
            'target'      => 'https://www.sv.tum.de/en/sv/who-we-are/asta/team/departments-of-asta/diversity-queer-department/',
        ],
        'progopt'          => [
            'description' => 'Program Optimization',
            'target'      => 'https://www.cs.cit.tum.de/pl/lehre/wintersemester-2122/vorlesungen/program-optimization-1-1-1/',
        ],
        'pse'              => [
            'description' => 'Patterns in Software Engineering',
            'target'      => 'https://artemis.cit.tum.de/courses/209',
        ],
        'qo'               => [
            'description' => 'Query Optimization',
            'target'      => 'https://db.in.tum.de/teaching/ws2425/queryopt/',
        ],
        'quintero'         => [
            'description' => 'Mathias Quintero',
            'target'      => 'https://home.in.tum.de/~szillat/',
        ],
        'rad'           => [
            'description' => 'Rad Umfrage',
            'target'      => 'https://evasys.zv.tum.de/evasys/online.php?p=TUMbike',
        ],
        're'            => [
            'description' => 'Requirements Engineering',
            'moodle_id'   => '96169',
        ],
        'reddit'           => [
            'description' => 'ReddiTUM',
            'target'      => 'https://reddit.com/r/redditum',
        ],
        'ref-eat-api'      => [
            'description' => 'All menus that are not older than one day for all locations from the eat-api in JSON',
            'target'      => 'https://tum-dev.github.io/eat-api/all_ref.json',
        ],
        'restplaetze'      => [
            'description' => 'Liste der Restplätze in Seminaren und Praktika',
            'target'      => 'https://www.cit.tum.de/cit/studium/studierende/pruefungsangelegenheiten-module/informatik/praktika-seminare/',
        ],
        'rmp'              => [
            'description' => 'Robot Motion Planning',
            'target'      => 'https://mvp.in.tum.de/courses/motion/index.html',
        ],
        'room'             => [
            'description' => 'Lernräume',
            'target'      => 'https://www.devapp.it.tum.de/iris/app/',
        ],
        'roombot'          => [
            'description' => 'Roomfinder als Telegram Bot',
            'target'      => 'https://t.me/tumroomsbot',
        ],
        'rpchi'            => [
            'description' => 'Robot Programming and Control for Human Interaction',
            'target'      => 'https://www.ce.cit.tum.de/rm/teaching/robot-programming-and-control-for-human-interaction/',
        ],
        'rts'              => [
            'description' => 'Echtzeitsysteme / Real Time Systems',
            'moodle_id'   => '68918',
        ],
        'satellite'        => [
            'description' => 'The TUM Satellite',
            'target'      => 'https://www.move2space.de/',
        ],
        'sbrml'            => [
            'description' => 'Sensor-based Robotic Manipulation and Locomotion',
            'moodle_id'   => '62737',
        ],
        'scheduling'            => [
            'description' => 'GBS Scheduling Trainer',
            'target'      => 'https://vmott42.in.tum.de/scheduling',
        ],
        'scivis'           => [
            'description' => 'Scientific Visualization / Visual Data Analytics',
            'target'      => 'https://www.cs.cit.tum.de/cg/teaching/winter-term-24-25/visual-data-analytics/',
        ],
        'scopus'           => [
            'description' => 'TUM UB Scopus Login (eAccess)',
            'target'      => 'https://login.eaccess.ub.tum.de/login?qurl=https://ub.tum.de%2fdbis-link%3ftitle_id%3d3636%26destination%3ddatenbanken%2fsuche%253Fqt-dbis%253D1%2526type%253Ddb%2526terms%253Dscopus%2526x%253D0%2526y%253D0',
        ],
        'scraper'          => [
            'description' => 'Tool to scrape and download videos from Panopto, TumLive and TumLive-v2',
            'target'      => 'https://github.com/Valentin-Metz/tum_video_scraper',
        ],
        'seba'             => [
            'description' => 'Software Engineering for Business Applications',
            'moodle_id'   => '58046',
        ],
        'seip'             => [
            'description' => 'Software Engineering in der industriellen Praxis',
            'target'      => 'https://wwwmatthes.in.tum.de/pages/305agw8vpolx/SEIP',
        ],
        'semantics'   => [
            'description' => 'Semantics of Programming Languages',
            'target'      => 'https://www21.in.tum.de/teaching/semantics/WS24/index.html',
        ],
        'semesterticket'   => [
            'description' => 'Semesterticket München',
            'target'      => 'https://www.semesterticket-muenchen.de',
        ],
        'set'              => [
            'description' => 'Studieneinführungstage der FSMPIC',
            'target'      => 'https://mpic.fs.tum.de/studium/studienbeginn/set/',
        ],
        'sharelatex'       => [
            'description' => 'ShareLaTeX@TUM',
            'target'      => 'https://sharelatex.tum.de',
        ],
        'slam'             => [
            'description' => 'TUM Hörsaal Slam',
            'target'      => 'https://fb.me/e/eQ0mb4QYz',
        ],
        'smds'             => [
            'description' => 'Seminar Modern Database Systems',
            'target'      => 'https://db.in.tum.de/teaching/ss24/seminarModernDatabaseSystems/',
        ],
        'social'           => [
            'description' => 'TUM Social Network (Mastodon Instance)',
            'target'      => 'https://tum.social/',
        ],
        'sp'               => [
            'description' => 'Studienplan B.Sc. Informatik',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/bachelor-informatik/studienplan/',
		],
        'sp18'               => [
            'description' => 'Studienplan B.Sc. Informatik beginn WS 18/19',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/bachelor-informatik/studienplan/#c332',
		],
		'spaetzle'		   => [
            'description' => 'Spätzle Ticker',
            'target'      => 'https://leonwind.github.io/spaetzle-ticker/',
        ],
        'springer'         => [
            'description' => 'Springer Link Login',
            'target'      => 'https://fsso.springer.com/federation/init?entityId=https://tumidp.lrz.de/idp/shibboleth&returnUrl=https%3A%2F%2Flink.springer.com',
        ],
        'st'               => [
            'description' => 'Signaltheorie',
            'target'      => 'https://www.ce.cit.tum.de/mmk/lehre/signaltheorie-ab-ws1920/',
            'moodle_id'   => '44034',
        ],
        'statista'         => [
            'description' => 'Statista',
            'target'      => 'https://de-statista-com.eaccess.ub.tum.de',
        ],
        'stats'            => [
            'description' => 'Prüfungsstatistiken',
            'target'      => 'https://home.stusta.de/~013107/cgi-bin/show_stat.cgi',
        ],
        'study'            => [
            'description' => 'Arbeitsplatz reservieren',
            'target'      => 'https://www.ub.tum.de/reservierung-lernplaetze',
        ],
	'sv-gast'          => [
            'description' => 'Formular zur Erstellung eines TUMonline Gastaccounts für FS- und SV-Menschen',
            'target'      => 'https://collab.dvb.bayern/x/9p6gB',
        ],
        'svv'              => [
            'description' => 'Livestream Studentische Vollversammlung',
            'target'      => 'https://live.rbg.tum.de/?year=2024&term=S&slug=svv&view=3',
        ],
        'ted'              => [
            'description' => 'TEDxTUM Event-Seite',
            'target'      => 'https://tedxtum.com',
        ],
        'theo'             => [
            'description' => 'Einführung in die theoretische Informatik',
            'target'      => 'https://www.cs.cit.tum.de/tcs/lehre/sommersemester-2024/theo/',
            'moodle_id'   => '96557',
        ],
        'theotutor'        => [
            'description' => 'Einführung in die theoretische Informatik: Automatatutor',
            'target'      => 'https://automata.model.in.tum.de/',
        ],
        'tms'              => [
            'description' => 'Support Elective: Think. Make. Start.',
            'target'      => 'https://www.thinkmakestart.com/',
        ],
        'ts'              => [
            'description' => 'Transaction Systems',
            'target'      => 'https://db.in.tum.de/teaching/ss24/transactions/',
        ],
	'tumenu'           => [
            'description' => 'The place, where you can find daily menus for some student places in Munich',
            'target'      => 'https://menu.tum.sexy/',
        ],
        'tval'            => [
            'description' => 'Status of the Validation Stations',
            'target'      => 'https://campus.tum.de/valistatus/en/',
        ],
        'unidb'            => [
            'description' => 'Unischema von Prof. Kemper',
            'target'      => 'https://db.in.tum.de/teaching/ws2021/grundlagen/uni.png',
        ],
        'vm'               => [
            'description' => 'Virtual Machines',
            'target'      => 'https://www.cs.cit.tum.de/pl/lehre/sommersemester-23/vorlesungen/virtual-machines-1/',
        ],
        'vorkurs'          => [
            'description' => 'Mathematik Vorkurs für Informatiker',
            'target'      => 'https://www.cit.tum.de/cit/studienbeginn/vorkurse-ferienkurse-mathematik/informatik/',
        ],
        'vt'               => [
            'description' => 'Virtualization Techniques',
            'target'      => 'https://www.ce.cit.tum.de/caps/lehre/wintersemester-24-25/vorlesungen/virtualization-techniques/',
        ],
        'wahl'             => [
            'description' => 'Hochschulwahlen',
            'target'      => 'https://www.sv.tum.de/wahl/',
        ],
        'walomat'          => [
            'description' => 'Wal-O-Mat',
            'target'      => 'https://walomat.asta.tum.de',
        ],
        'websec'           => [
            'description' => 'WebApplication Security Bachelor Praktikum',
            'target'      => 'https://www.sec.in.tum.de/i20/teaching/ws2017/web-application-security',
        ],
        'wi-ma-sp'         => [
            'description' => 'Studienplan M.Sc. Information Systems (Wirtschaftsinformatik)',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/master-information-systems/studienplaene/'
        ],
        'wi-sp'            => [
            'description' => 'Studienplan B.Sc. Wirtschaftsinformatik',
            'target'      => 'https://www.cit.tum.de/cit/studium/studiengaenge/bachelor-wirtschaftsinformatik/studienplaene/',
        ],
        'z'            => [
            'description' => 'Zulip',
            'target'      => 'https://zulip.in.tum.de/',
        ],
	];

    // Format is: <source / synonym> => <target> - the target must be present in the $routes array
    private $synonyms = [
        '365'            => 'semesterticket',
        'a'              => 'artemis',
        'ada'            => 'advalgs',
        'afl'            => 'automata',
        'ai'             => 'ki',
        'algebra'        => 'algebra1',
        'bs'             => 'gbs',
        'complexity'     => 'comp',
        'covid'          => 'corona',
        'csd'            => 'pride',
        'eidi1'          => 'eidi',
        'eidi2'          => 'fpv',
        'erap'           => 'gra',
        'erapra'         => 'gra',
        'erapraktikum'	 => 'gra',
        'ezs'            => 'rts',
        'gdb'            => 'db',
        'geo'            => 'geokalkuele',
        'geokal'         => 'geokalkuele',
        'gpp'            => 'pgdp',
        'hsw'            => 'wahl',
        'info1'          => 'eidi',
        'info2'          => 'fpv',
        'kino'           => 'film',
        'kreutz'         => 'julius',
        'l'              => 'live',
        'la'             => 'linalg',
        'latex'          => 'sharelatex',
        'match'          => 'matching',
        'netz'           => 'grnvs',
        'np'             => 'numprog',
        'pat'            => 'pse',
        'patterns'       => 'pse',
        'protein'        => 'pp',
        'queer'          => 'diversity',
        'roomfinder'     => 'finder',
        'rooms'          => 'room',
        'schach'         => 'chess',
        'sem'            => 'semantics',
        'semantik'       => 'semantics',
        'sp-ge'          => 'ge-sp',
        'sp-ma'          => 'ma-sp',
	    'sv-gastaccount' => 'sv-gast',
        'tex'            => 'sharelatex',
        'ticket'         => 'semesterticket',
        'tumi'           => 'esn',
        'uml'            => 'apollon',
        'urban-mobility' => 'ecarus',
        'wahlomat'       => 'walomat',
        'zoom'           => 'conf',
        'zweidi'         => 'fpv',
    ];

    /**
     * Only items/routes listed in this will be shown on the front page of the website
     * @var mixed[][]
     */
    private $sections = [
        '1. Semester' => [
            'carlos',
            'ds',
            'dsolver',
            'eidi',
            'era',
            'pgdp',
        ],
        '2. Semester' => [
            'eist',
	        'fpv',
            'gad',
            'gra',
            'linalg',
            'ged',
        ],
        '3. Semester' => [
            'anal',
            'db',
            'gbs',
            'itsec',
        ],
        '4. Semester' => [
            'grnvs',
            'theo',
            'dwt',
        ],
        '5. Semester' => [
            'numprog',
            'kap',
        ],
        '6. Semester' => [],
        'Special'     => [
            'app',
            'artemis',
            'astra',
            'c',
            'c2',
            'commuteplanner',
            'cvl',
            'dea',
            'eat-api',
            'ecarus',
            'enigame',
            'esn',
            'film',
            'finder',
            'ge-ma-sp',
            'ge-sp',
            'git-tut',
            'gitlab',
            'hunger',
            'ieee',
            'live',
            'm',
            'ma-sp',
            'matching',
            'memes',
            'mensabot',
            'mensabot2',
            'navigatum',
            'panopto',
            'reddit',
            'room',
            'roombot',
            'scopus',
            'set',
            'sharelatex',
            'slam',
            'social',
	    'sp',
	    'spaetzle',
            'springer',
            'statista',
	    'tumenu',
            'tval',
            'vorkurs',
            'wahl',
            'walomat',
            'wi-ma-sp',
            'wi-sp',
            'z',
        ],
        'Electives'   => [
            'adlr',
            'adm',
            'advalgs',
            'agt',
            'algebra1',
            'ase',
            'automata',
            'bmt',
            'cbdp',
            'comp',
            'compiler',
            'conpra',
            'cpp',
            'crypto',
            'csc',
            'cvmvg',
            'cvvm',
            'ea',
            'erdb',
            'ged',
            'geokalkuele',
            'gki',
            'gog',
            'ilab1',
            'ilab2',
            'ilabx',
            'ki',
            'markov',
            'ml',
            'modsim',
            'mvs',
            'netsec',
            'osp',
            'pgm',
            'pl',
            'pp',
            'progopt',
            'pse',
            'qo',
            'rmp',
            'rpchi',
            'rts',
            'sbrml',
            'scivis',
            'seip',
            'smds',
            'st',
            'tms',
            'vm',
            'vt',
        ],
    ];

    public function getTargetOfSub($host) {
        //Split up the requested host into parts and filter out unneeded info
        $domain = explode('.', $host);
        $domain = array_filter($domain, function ($e) {
            return $e !== 'sexy' && $e !== 'tum' && $e !== 'www';
        });

        //DEPRECATED - First item should be a site type: tutor, moodle or other
        $siteType = null;
        if (count($domain) > 1) {
            $siteType = array_shift($domain);
        }
        $redirectUrl = array_shift($domain);

        //Static route to return the route array as json
        if ($redirectUrl === 'json') {
            header('Content-type: application/json');
            die(json_encode($this->routes));
        }

        //Yea, we have multiple names for the same thing
        if (isset($this->synonyms[$redirectUrl])) {
            $redirectUrl = $this->synonyms[$redirectUrl];
        } //Moodle support; Example: mgad.tum.sexy
        else {
            if (strlen($redirectUrl) > 1 && $redirectUrl[0] == 'm' && !isset($this->routes[$redirectUrl])) {
                $redirectUrl = substr($redirectUrl, 1);
                $siteType = 'm';
                //Allow for synonyms as well in moodle redirects
                if (isset($this->synonyms[$redirectUrl])) {
                    $redirectUrl = $this->synonyms[$redirectUrl];
                }
            }
        }

        //If it does not exist? Go to main page
        if (!isset($this->routes[$redirectUrl])) {
            return 'https://tum.sexy/';
        } //If target does not exist? Try moodle course
        else if (!isset($this->routes[$redirectUrl]['target'])) {
            if (isset($this->routes[$redirectUrl]['moodle_id'])) {
                $siteType = 'm';
            } //If target and moodle course does not exist? Go to main page
            else {
                return 'https://tum.sexy/';
            }
        }

        //In case we actually want to go to a different target than the actual redirect
        switch ($siteType) {
            case 'm' :
                // This is a moodle redirect like minfo1.tum.sexy
                $route = $this->routes[$redirectUrl];
                if (!isset($route['moodle_id'])) {
                    return $route['target'];  // Fallback to target if moodle id is unknown
                }

                return 'https://www.moodle.tum.de/course/view.php?id=' . $route['moodle_id'];
        }

        return $this->routes[$redirectUrl]['target'];
    }

    public function getArraysThatShouldBeSorted(): array {
        return [
            array_keys($this->routes),
            array_keys($this->synonyms),
            $this->sections["Special"],
            $this->sections["Electives"],
        ];
    }

    public function getResolvedArrays(): array {
        $ret = [];
        //all entries, will be reduced to the entries that are not in a section
        $all = $this->routes;

        sort($this->sections['Electives']);

        //Iterate over our sections which can contain any number of routes
        foreach ($this->sections as $section => $subs) {
            $ret[$section] = [];

            //Iterate over all routes in current section
            foreach ($subs as $sub) {

                //Resolve the route and add to final array
                $ret[$section][] = ['desc' => $this->routes[$sub]['description'], 'sub' => $sub];
                // remove entry from all (because it is in a section)
                unset($all[$sub]);
            }
        }
        foreach ($all as $sub => $hiddenElem) {
            $ret["Others"][] = ['desc' => $hiddenElem['description'], 'sub' => $sub];
        }
        return $ret;
    }

}
