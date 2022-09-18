<?php

namespace App\Controller;

use App\Entity\Informations;
use App\Repository\InformationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class InformationsController extends AbstractController
{
    #[Route('api/informations', name: 'app_informations')]
    public function all_information(
    InformationsRepository $infoRepo,
    SerializerInterface $serializer
    ): JsonResponse
    {
        $info=$infoRepo->findAll();
        $response=$serializer->serialize($info,'json');
        return new JsonResponse($response,Response::HTTP_OK, [], true);
    }
    
    #[Route('', name: 'app_launch')]
    public function launch(
    InformationsRepository $infoRepo,
    SerializerInterface $serializer
    ):JsonResponse
    { 
          $info=$infoRepo->findAll();
        $response=$serializer->serialize($info,'json');
        return new JsonResponse($response,Response::HTTP_OK, [], true);
    }


    #[Route('api/informations/update/{id}', name: 'update_informations')]
    public function update_information(
    Request $request,
    SerializerInterface $serializer,
    Informations $current,
    EntityManagerInterface $em
    ): JsonResponse
    {
        $info=$serializer->deserialize(
            $request->getContent(),
            Informations::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $current]
        );
        $em->persist($info);
        $em->flush();
        $response=$serializer->serialize($info,'json');
        return new JsonResponse($response,Response::HTTP_OK, [], true);
    }






}
