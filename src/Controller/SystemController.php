<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class SystemController extends AbstractController
{
    /**
     * @Route("/system", name="system_build")
     */
    public function indexAction(KernelInterface $kernel, Request $request)
    {
        if ($request->getMethod() == "POST") {
            $application = new Application($kernel);
            $application->setAutoExit(false);

            $input = new ArrayInput([
                'command' => 'generate:static-site',
            ]);

            // You can use NullOutput() if you don't need the output
            $output = new BufferedOutput();
            $application->run($input, $output);

            // return the output, don't use if you used NullOutput()
            $content = $output->fetch();

            // return new Response(""), if you used NullOutput()
            return new Response($content);
        }

        // replace this example code with whatever you need
        return $this->render('admin/system/index.html.twig');
    }
}
