<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Nacmartin\PhpExecJs\Runtime\ExternalRuntime;
use Nacmartin\PhpExecJs\Runtime\V8jsRuntime;

class IndexController extends AbstractController
{
    public function index(Request $request)
    {
        $props = [
            'movies' => [
                [
                    'slug' => 'shisyakai-11172',
                    'name' => '『キャプテン・マーベル』',
                    'image' => '/movie/title/image_contents/m/mv66470-m.jpg',
                ]
            ]
        ];

        return $this->render('index.html.twig', [
            'props' => $this->get('serializer')->serialize($props, 'json'),
        ]);
    }

    public function runtimes()
    {
        $runtimes = [
            new V8jsRuntime('V8js PHP Extension (V8)'),
            new ExternalRuntime('Node.js (V8)', array('node', 'nodejs')),
        ];

        foreach ($runtimes as $runtime) {
            var_dump($runtime->isAvailable());
        }

        exit;
    }
}