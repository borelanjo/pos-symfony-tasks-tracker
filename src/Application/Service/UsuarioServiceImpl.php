<?php

namespace App\Application\Service;

use App\Domain\Model\UsuarioAtribuicao;
use App\Domain\Service\UsuarioService;
use App\Infrastructure\Repository\UsuarioRepository;


/**
 * Class UsuarioServiceImpl
 * @package App\Application\Service
 */
class UsuarioServiceImpl implements UsuarioService
{

    /**
     * @var UsuarioRepository
     */
    public UsuarioRepository $usuarioRepository;

    /**
     * UsuarioServiceImpl constructor.
     * @param UsuarioRepository $usuarioRepository
     */
    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function listar(): array
    {
        return $this->usuarioRepository->listar();
    }

    public function atribuicoes(int $id): array
    {
        return $this
            ->getDoctrine()
            ->getRepository(UsuarioAtribuicao::class)
            ->findBy(['usuario' => $id]);

    }
}