<?php

namespace Type\Company;

final class Company
{
    private string $name, $website;

    public function __construct(string $name, string $website)
    {
        $this->name = $name;
        $this->website = $website;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }
}
