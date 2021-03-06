<?php

declare(strict_types=1);

namespace Rector\Doctrine\Type;

use PhpParser\Node\Expr;
use PHPStan\Type\Generic\GenericObjectType;
use Rector\Core\Exception\NotImplementedYetException;
use Rector\NodeNameResolver\NodeNameResolver;
use Rector\PHPStan\Type\FullyQualifiedObjectType;

final class RepositoryTypeFactory
{
    /**
     * @var NodeNameResolver
     */
    private $nodeNameResolver;

    public function __construct(NodeNameResolver $nodeNameResolver)
    {
        $this->nodeNameResolver = $nodeNameResolver;
    }

    public function createRepositoryPropertyType(Expr $entityReferenceExpr): GenericObjectType
    {
        if (! $entityReferenceExpr instanceof Expr\ClassConstFetch) {
            throw new NotImplementedYetException();
        }

        /** @var string $className */
        $className = $this->nodeNameResolver->getName($entityReferenceExpr->class);

        return new GenericObjectType('Doctrine\ORM\EntityRepository', [new FullyQualifiedObjectType($className)]);
    }
}
