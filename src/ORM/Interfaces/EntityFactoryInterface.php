<?php
declare(strict_types=1);

namespace EoneoPay\Externals\ORM\Interfaces;

interface EntityFactoryInterface
{
    /**
     * Create an entity.
     *
     * @param mixed[] $data
     *
     * @return \EoneoPay\Externals\ORM\Interfaces\EntityInterface
     */
    public function create(array $data): EntityInterface;

    /**
     * Get default date used for test.
     *
     * @return mixed[]
     */
    public function getDefaultData(): array;
}
