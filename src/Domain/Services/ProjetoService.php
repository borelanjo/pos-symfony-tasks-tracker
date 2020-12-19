<?php

namespace App\Domain\Services;

use App\Domain\Model\Projeto;
use App\Infrastructure\Repository\ProjetoRepository;

/**
 * Class ProjetoService
 * @package App\Domain\Services
 */
class ProjetoService
{

    /**
     * @var ProjetoRepository
     */
    public ProjetoRepository $projetoRepository;

    /**
     * ProjetoService constructor.
     * @param ProjetoRepository $projetoRepository
     */
    public function __construct(ProjetoRepository $projetoRepository)
    {
        $this->projetoRepository = $projetoRepository;
    }

    /**
     * @param Projeto $projeto
     */
    public function salvar(Projeto $projeto)
    {
        $this->projetoRepository->salvar($projeto);
    }

    /**
     * @return array
     */
    public function listar(): array
    {
        return $this->projetoRepository->listar();
    }

    /**
     * @return array
     */
    public function getNumroDeProjetos(): array
    {
        return $this->projetoRepository->getNumeroProjetos();
    }
}
