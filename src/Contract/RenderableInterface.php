<?php
namespace Fasty\Contract;

interface RenderableInterface
{
    public function render(array $params = []): string;
}