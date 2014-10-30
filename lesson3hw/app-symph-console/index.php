<?php
/**
 * Created by PhpStorm.
 * User: amoroz-prom
 * Date: 30.10.14
 * Time: 17:10
 */
require "../vendor/autoload.php";
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


$rrt;
$app = new Application();
$rr = $app->register('build');
$rr
//    ->setDefinition(array(
//        new InputArgument('dir', InputArgument::REQUIRED, 'Directory name'),
//    ))
//    ->setDescription('Displays the files in the given directory')
//    ->setCode(function (InputInterface $input, OutputInterface $output,$rrt) {
//        $dir = $input->getArgument('dir');
//        $input->getArguments($rrt);
//        $output->writeln(sprintf('Dir listing for <info>%s</info>', $dir));
//
//    });
    ->setDefinition(array(new InputArgument('doski',InputArgument::REQUIRED,'kolichestvo dosok')))
    ->setCode(function(InputInterface $input, OutputInterface $output){
        $coun = $input->getArgument('doski');
        $output->writeln($coun);
    });
$app->run();
$rr->setDefinition(array(new InputArgument('kirpichi',InputArgument::REQUIRED,'kol kirpich')))
    ->setCode(function(InputInterface $input, OutputInterface $output){
        $countt = $input->getArgument('kirpichi');
        $output->writeln($countt);
    });
$app->run();