#!/usr/bin/env php
<?php
require "vendor/autoload.php";
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
$app = new Application();

$app->register('hello')
    ->setDescription('this code to say hello')
    ->addArgument('name', InputArgument::REQUIRED, 'type your name')
    ->setCode(function(InputInterface $input, OutputInterface $output){
        $name = $input->getArgument('name');
        $message = 'hello ' . $name;
        $output->writeln("<info>{$message}</info>");
    });
$app->run();
