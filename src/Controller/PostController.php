<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();
        //dd($posts);
        return $this->render('post/home.html.twig', [
            'posts' => $posts,
        ]);
    }
    #[Route('/post/add', name: 'post_add')]

    public function addPost(Request $request): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        //dd($this->getUser());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setUser($this->getUser());
            $post->setActive(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('home');
        }


        return $this->render('post/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * ---Route("/post/{id}", name="post_view", methods={"GET"}, requirements={"id"="\d+"})
     * @Route("/post/{slug}", name="post_view", methods={"GET"})
     */

    #[Route('/post/{slug}', name: 'post_view')]
    public function post(Post $post): Response
    {   //dd($post);
        return $this->render('post/view.html.twig', [
            'post' => $post
        ]);
    }
}
