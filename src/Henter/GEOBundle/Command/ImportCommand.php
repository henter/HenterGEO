<?php

/*
 * import csv
 */

namespace Henter\GEOBundle\Command;

use Henter\GEOBundle\Document\Coordinate;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Henter\GEOBundle\Document\Place;

class ImportCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('geo:data:import')
            ->setDescription('import demo data')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;
        $this->dm = $this->getContainer()->get('doctrine_mongodb')->getManager();

        $this->import_data();

        $this->output->writeln('导入完成');
    }

	public function import_data(){
        $data = json_decode(file_get_contents(__DIR__.'/places.json'), true);

		foreach($data as $k=>$v){
            $new = new Place();
            $coordinate = new Coordinate();
            $coordinate->setLongitude($v['coordinate']['longitude']);
            $coordinate->setLatitude($v['coordinate']['latitude']);
            $new->setCoordinate($coordinate);
            $new->setAddress($v['address']);
            $new->setTitle($v['title']);

            $this->dm->persist($new);
            $this->output->writeln($v['address']);

		}
        $this->output->writeln('importing...');
        $this->dm->flush($new);

        $this->output->writeln(' done');
        return true;
	}

}
