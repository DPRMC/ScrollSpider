<?php

namespace Dprc\Spider\ScrollSpider\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command {
    protected function configure() {
        $this->setName( 'app:test-command' )
             ->setDescription( "A test symphony console command." )
             ->setHelp( "This is just a dummy command." );
    }

    protected function execute( InputInterface $input, OutputInterface $output ) {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln( [ 'Test Command',
                            '============',
                            '', ] );
    }
}