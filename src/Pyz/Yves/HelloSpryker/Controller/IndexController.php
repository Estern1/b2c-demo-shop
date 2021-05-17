<?php


namespace Pyz\Yves\HelloSpryker\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Spryker\Yves\Kernel\View\View;

/**
 * @method \Pyz\Client\HelloSpryker\HelloSprykerClientInterface getClient()
 */
class IndexController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return View
     */
    public function indexAction(Request $request): View
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString("Hello Spryker!");

        $helloSprykerTransfer = $this->getClient()->reverseString($helloSprykerTransfer);

        $data = ['reversedString' => $helloSprykerTransfer->getReversedString()];

        return $this->view(
            $data,
            [],
            '@HelloSpryker/views/index/index.twig'
        );
    }
}
