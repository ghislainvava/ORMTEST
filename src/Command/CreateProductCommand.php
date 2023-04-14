<?php

// namespace App\Command;

// use App\Service\ProductService;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Component\Console\Command\Command;
// use Symfony\Component\Console\Input\InputArgument;
// use Symfony\Component\Console\Input\InputInterface;
// use Symfony\Component\Console\Output\OutputInterface;

// class CreateProductCommand extends Command
// {
//     protected static $defaultName = 'app:create-product';

//     private $productService;

//     public function __construct(ProductService $productService)
//     {
//         $this->productService = $productService;

//         parent::__construct();
//     }

//     protected function configure()
//     {
//         $this
//             ->setDescription('Creates a new product.')
//             ->addArgument('name', InputArgument::REQUIRED, 'Product name')
//             ->addArgument('description', InputArgument::REQUIRED, 'Product description')
//             ->addArgument('price', InputArgument::REQUIRED, 'Product price');
//     }

//     protected function execute(InputInterface $input, OutputInterface $output): int
//     {
//         $name = $input->getArgument('name');
//         $description = $input->getArgument('description');
//         $price = (float)$input->getArgument('price');

//         $product = $this->productService->createProduct($name, $description, $price);

//         $output->writeln("Produit créé avec succès : ID - " . $product->getId() . ", Nom - " . $product->getName());

//         return Command::SUCCESS;
//     }
// }
