<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{

    /**
     * @Route("/postread/{id}", name="postread_id")
     */
    public function postread($id, PostRepository $postRepository)
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post #'. $id . ' not found.');
        }
        return $this->render('post/post.read.html.twig', [
            'post' => $post,
        ]);
    }




//    /**
//     * @Route("/post", name="post")
//     */
//    public function index()
//    {
//        return $this->render('post/index.html.twig', [
//            'controller_name' => 'PostController',
//        ]);
//    }
}
