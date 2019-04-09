<?php declare(strict_types=1);

namespace Swag\EntityExtension\Extension\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtensionInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Deferred;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ObjectField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CustomExtension implements EntityExtensionInterface
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new ObjectField('custom_struct', 'customStruct'))->addFlags(new Deferred())
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}