<?php

declare(strict_types=1);

namespace PoPSitesWassup\StanceMutations\MutationResolvers;

class CreateStanceMutationResolverBridge extends AbstractCreateUpdateStanceMutationResolverBridge
{
    public function getMutationResolverClass(): string
    {
        return CreateStanceMutationResolver::class;
    }

    protected function isUpdate(): bool
    {
        return false;
    }
}
