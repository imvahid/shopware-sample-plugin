<?php

namespace Dadekavan\Career\Storefront\Controller;

use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class CareerController extends StorefrontController
{
    private SystemConfigService $systemConfigService;
    private EntityRepository $mediaRepository;

    public function __construct(
        SystemConfigService $systemConfigService,
        EntityRepository $mediaRepository
    )
    {
        $this->systemConfigService = $systemConfigService;
        $this->mediaRepository = $mediaRepository;
    }

    #[Route(path: '/careers', name: 'frontend.careers.index', methods: ['GET'])]
    public function index(Context $context): Response
    {
        $careerPageTitle = $this->systemConfigService->get('CareerPlugin.config.careerPageTitle');
        $imageID = $this->systemConfigService->get('CareerPlugin.config.careerPageImage');
        $careerPageImage = $this->mediaRepository->search(new Criteria([$imageID]), $context)->first();

        return $this->render('@CareerPlugin/storefront/career/index.html.twig', [
            'careerPageTitle' => $careerPageTitle,
            'careerPageImage' => $careerPageImage->getUrl(),
            'message' => password_hash("12345678", PASSWORD_DEFAULT)
        ]);
    }
}