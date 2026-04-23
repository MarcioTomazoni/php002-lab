<?php

class User
{
    public function authenticate($email, $senha)
    {
        // TEMPORÁRIO (simulação)
        if ($email === 'admin@teste.com' && $senha === '123456') {
            return [
                'id' => 1,
                'nome' => 'Administrador'
            ];
        }

        return false;
    }
}
