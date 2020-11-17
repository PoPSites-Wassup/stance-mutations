<?php

declare(strict_types=1);

namespace PoPSitesWassup\StanceMutations\MutationResolvers;

class UpdateStanceMutationResolverBridge extends AbstractCreateUpdateStanceMutationResolverBridge
{
    public function getMutationResolverClass(): string
    {
        return UpdateStanceMutationResolver::class;
    }

    protected function isUpdate(): bool
    {
        return true;
    }
}
