
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_modelo extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // REGISTRAR USUARIO
    
    public function registrar_usuario($data)
    {
        $data['rol_id'] = 1; // usuario por defecto
        $data['activo'] = 1; // usuario activo
        return $this->db->insert('usuarios', $data);
    }

    // VERIFICAR USUARIO EXISTENTE
  
    public function verificar_usuario_existente($email, $dni)
    {
        return $this->db
            ->group_start()
                ->where('nombre_usuario', $email)
                ->or_where('dni', $dni)
            ->group_end()
            ->get('usuarios')
            ->num_rows() > 0;
    }

    // OBTENER USUARIOS

    public function obtener_usuario_por_email($email)
    {
        return $this->db
            ->where('nombre_usuario', $email)
            ->where('activo', 1)
            ->get('usuarios')
            ->row();
    }

    public function obtener_usuario_por_id($id_usuario)
    {
        return $this->db
            ->where('id_usuario', $id_usuario)
            ->get('usuarios')
            ->row();
    }

    public function obtener_usuarios()
    {
        return $this->db
            ->where('activo', 1)
            ->get('usuarios')
            ->result();
    }

    public function obtener_usuarios_estandar()
    {
        return $this->db
            ->where('rol_id', 1)
            ->where('activo', 1)
            ->get('usuarios')
            ->result();
    }

    // ACTUALIZAR USUARIO
   
    public function actualizar_usuario($id_usuario, $data)
    {
        unset($data['rol_id']); // No permitir cambiar el rol

        if (empty($data['palabra_clave'])) 
        {
            unset($data['palabra_clave']);
        }

        return $this->db
            ->where('id_usuario', $id_usuario)
            ->update('usuarios', $data);
    }

    // VALIDACIONES
  
    public function usuario_tiene_clientes($id_usuario)
    {
        return $this->db
            ->where('usuario_id', $id_usuario)
            ->get('clientes')
            ->num_rows() > 0;
    }

    public function usuario_tiene_reservas($id_usuario)
    {
        return $this->db
            ->where('usuario_id', $id_usuario)
            ->get('reservas')
            ->num_rows() > 0;
    }

    // DESACTIVAR USUARIO

    public function eliminar_usuario($id_usuario)
    {
        return $this->db
            ->where('id_usuario', $id_usuario)
            ->update('usuarios', ['activo' => 0]);
    }
}
?>
