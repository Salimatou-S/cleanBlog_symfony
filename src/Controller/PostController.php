<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('post/home.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    #[Route('/post/{id}', name: 'post_view')]
    public function post($id): Response
    {
        return $this->render('post/view.html.twig', [
            'post' => [
                'title'=>'Le titre de l\'article',
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Libero enim sed faucibus turpis in eu mi bibendum neque. Ullamcorper a lacus vestibulum sed arcu. Tincidunt lobortis feugiat vivamus at augue eget. Augue ut lectus arcu bibendum at. Egestas maecenas pharetra convallis posuere morbi leo urna. Lacus vestibulum sed arcu non. At imperdiet dui accumsan sit amet. Libero justo laoreet sit amet cursus sit amet dictum sit.

                Volutpat est velit egestas dui id ornare arcu odio. Nam at lectus urna duis. Turpis massa tincidunt dui ut. Adipiscing diam donec adipiscing tristique. Elementum sagittis vitae et leo. Duis convallis convallis tellus id interdum velit laoreet. At tellus at urna condimentum mattis pellentesque. Maecenas pharetra convallis posuere morbi leo urna molestie at. Viverra justo nec ultrices dui sapien eget mi proin. Et pharetra pharetra massa massa ultricies. Euismod lacinia at quis risus. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus.
                
                Commodo sed egestas egestas fringilla phasellus. Arcu cursus vitae congue mauris rhoncus aenean vel. Sodales ut eu sem integer vitae. Ac ut consequat semper viverra nam libero justo laoreet. Non enim praesent elementum facilisis. Massa placerat duis ultricies lacus sed. Lacus luctus accumsan tortor posuere ac. Habitant morbi tristique senectus et netus et malesuada. Enim neque volutpat ac tincidunt vitae semper quis. Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Diam vel quam elementum pulvinar etiam non quam lacus suspendisse. Neque aliquam vestibulum morbi blandit cursus risus at ultrices mi. Dolor purus non enim praesent elementum facilisis. Pharetra sit amet aliquam id diam maecenas ultricies mi eget. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. In pellentesque massa placerat duis. Nisl vel pretium lectus quam id leo in vitae. Arcu bibendum at varius vel pharetra. Elementum curabitur vitae nunc sed velit dignissim. Sit amet purus gravida quis blandit turpis cursus in.
                
                Posuere sollicitudin aliquam ultrices sagittis. Ut aliquam purus sit amet luctus venenatis lectus. Tincidunt arcu non sodales neque sodales ut. In nibh mauris cursus mattis. Vulputate dignissim suspendisse in est ante in. Sed risus pretium quam vulputate dignissim suspendisse. Id diam vel quam elementum. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Fermentum dui faucibus in ornare quam viverra. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Mauris ultrices eros in cursus.'
            ],
        ]);
    }
}
