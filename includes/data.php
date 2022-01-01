<?php
/**
 * AVERTISSEMENT : normalement les données doivent
 * provenir d'une base de données 
 
 */


$auteurs =[

    'az123' =>  [
        "id"=> 'az123',
        'nom'=> 'Léo',
        'prenom'=> 'Gabriel',
        'Naissance'=> new DateTime('1987-05-25'),
        'infos' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sunt accusantium veritatis tempora cumque. 
        Voluptas fuga porro quae, cupiditate enim maxime itaque corrupti magni vero reiciendis molestias delectus at dolor!',
        'avatar' => 'avatar01.jpg'
    ],
    'at569' => [
        "id"=> 'at569',
        'nom'=> 'Raphael',
    'prenom'=> 'Arthur',
    'Naissance'=> new DateTime('1985-11-11'),
    'infos' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
     Officia dicta error earum sit ea animi nulla laborum commodi delectus, mollitia pariatur enim? Harum error nulla cumque et possimus blanditiis natus.',
    'avatar' => 'avatar02.png'
    ],
  'mk852' => [
        "id"=> 'mk852',
    'nom'=> 'Louis',
'prenom'=> 'mael',
'Naissance'=> new DateTime('1998-03-21'),
'infos' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam repudiandae nihil perspiciatis expedita dolores deserunt eum rerum animi reiciendis quasi, 
libero velit labore, necessitatibus debitis esse sequi voluptatem deleniti.',
'avatar' => 'avatar03.png'
  ],
 'jkl451' => [
     "id"=> 'jkl451',
     'nom'=> 'Lucas',
     'prenom'=> 'Adam',
     'Naissance'=> new DateTime('1994-10-5'),
     'infos' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nam repudiandae nihil perspiciatis expedita dolores deserunt eum rerum animi reiciendis quasi, 
     libero velit labore, necessitatibus debitis esse sequi voluptatem deleniti.',
     'avatar' => 'avatar04.jpg'],


];

$articles = [

'art123'  => [
         'id'        => 'art123',
         'auteurId'  => 'az123',
         'titre'     => 'materia minty',
         'createdAt' => new DateTime('2021-10-14'),
         'image'     => 'paysage1.jpg', 
         'resume'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum maxime sapiente necessitatibus.',
         'paragraphe'=> [ 
                        
                        [
                            'sous titre' => 'Introduction aux materias',
                            'contenu'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum maxime sapiente necessitatibus.
                            Odit quaerat tempora hic, libero totam sequi, quasi tenetur asperiores repellat illum atque, amet velit unde eos veritatis!',
                        ], 
                        [
                            'sous titre' => 'les mintys',
                            'contenu'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum maxime sapiente necessitatibus.
                            Odit quaerat tempora hic, libero totam sequi, quasi tenetur asperiores repellat illum atque, amet velit unde eos veritatis!',
                        ], 
                    ],
    ],
    'art124'  =>  [
        'id'        => 'art124',
        'auteurId'  => 'at569',
        'titre'     => "Pays d'Aquitaine",
        'createdAt' => new DateTime('2021-10-14'),
        'image'     => 'paysage2.jpg', 
        'resume'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum maxime sapiente necessitatibus.',
        'paragraphe'=> [ 
                    
                    [
                        'sous titre' => 'Les meilleurs restaurants',
                        'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Consectetur rerum sit temporibus dolorem velit id, dolore sint libero veritatis ex ea, mollitia aperiam asperiores amet est accusantium, laboriosam neque eaque?',
                    ], 
                    [
                        'sous titre' => 'Les musées',
                        'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Consectetur rerum sit temporibus dolorem velit id, dolore sint libero veritatis ex ea, mollitia aperiam asperiores amet est accusantium, laboriosam neque eaque?',
                    ], 
                ],
            ],

 'art125'  =>[
            'id'        => 'art125',
            'auteurId'  => 'mk852',
            'titre'     => "Soluta accusmus tempero",
            'createdAt' => new DateTime('2021-09-20'),
            'image'     => 'paysage3.jpg', 
            'resume'    => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum maxime sapiente necessitatibus.',
            'paragraphe'=> [ 
                        
                        [
                            'sous titre' => 'Molestia itaque',
                            'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Consectetur rerum sit temporibus dolorem velit id, dolore sint libero veritatis ex ea, mollitia aperiam asperiores amet est accusantium, laboriosam neque eaque?',
                        ], 
                        [
                            'sous titre' => 'Nostrum omnis perspiciatis',
                            'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Consectetur rerum sit temporibus dolorem velit id, dolore sint libero veritatis ex ea, mollitia aperiam asperiores amet est accusantium, laboriosam neque eaque?',
                        ], 
                    ],
                ],
            
            ];
        


