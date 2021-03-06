<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::AUTO_IMPORT_NAMES, false);

    $parameters->set(Option::SETS, [SetList::DEAD_CODE]);

    $parameters->set(Option::EXCLUDE_PATHS, ['orm/lib/Doctrine/ORM/Query/ResultSetMappingBuilder.php', 'orm/lib/Doctrine/ORM/Query/SqlWalker.php']);
};
