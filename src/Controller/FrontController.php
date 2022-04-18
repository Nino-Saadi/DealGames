<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $productRepository, Request $request): Response
    {
        $products = $productRepository->findAll();
        return $this->render('front/index.html.twig', [
            'products' => $products,
            'controller_name' => 'Bienvenu sur DealGames',
        ]);
    }

    // #[Route('/inscription', name: 'app_inscription')]
    // public function inscription(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $hasher)
    // {
    //     $user = new User();
    //     $form = $this->createForm(UserType::class, $user);
    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $user->setCreatedAt(new \DateTime);
    //         //Je récupère le mdp enier (visible)
    //         $pwd = $user->getPassword();
    //         //J'utilise la méthode hashPassword() de la classe UserPasswordInterface pour hashé mon mdp.
    //         //Cette méthode attends 2 paramètres: le user et le mdp visible
    //         $pwdHashed = $hasher->hashPassword($user, $pwd);
    //         // J'ai maintenant le mdp hashé
    //         //Je peux donc l'envoyer dans mon objet utilisateur.
    //         $user-> setPassword($pwdHashed);
    
    //         dd($pwdHashed);

    //         $userRepository->add($user);

    //         $this->addFlash("succes","Bravo vous êtes inscrit");

    //         return $this->redirectToRoute('app_home');
    //     }
    //     return $this->renderForm("front/inscription.html.twig",[
    //         'form'=>$form,
    //     ]);
    // }

}



