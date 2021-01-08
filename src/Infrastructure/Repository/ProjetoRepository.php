<?php

namespace App\Infrastructure\Repository;

use App\Domain\Model\Projeto;

/**
 * class ProjetoRepository
 * @package App\Infrastructure\Repository
 */
interface ProjetoRepository
{
    public function salvar(Projeto $projeto): void;

    public function listar(): array;

    public function getNumeroProjetos(): int;
}
