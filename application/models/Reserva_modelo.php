
<?php

class Reserva_modelo extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    // ------------------- OBTENER RESERVAS POR USUARIO -------------------
    public function obtener_reservas($usuario_id)
    {
        return $this->db->select('
                r.id_reserva,
                r.cantidad,
                r.fecha_reserva,
                r.monto_total,
                r.estado,
                e.nombre AS nombre_espectaculo,
                e.fecha  AS fecha_espectaculo,
                e.precio
            ')
            ->from('reservas r')
            ->join('espectaculos e', 'r.espectaculo_id = e.id_espectaculo')
            ->where('r.usuario_id', $usuario_id)
            ->where('r.estado !=', 'cancelada')
            ->order_by('r.fecha_reserva', 'DESC')
            ->get()
            ->result_array();
    }

    // ------------------- CREAR RESERVA -------------------
    public function crear_reserva($id_espectaculo, $cantidad, $fecha_reserva, $usuario_id, $monto_total)
    {
        $this->db->trans_start();

        // Verificar entradas disponibles
        $espectaculo = $this->db->select('disponibles')
            ->where('id_espectaculo', $id_espectaculo)
            ->get('espectaculos')
            ->row();

        if (!$espectaculo || $espectaculo->disponibles < $cantidad)
        {
            return FALSE;
        }

        // Insertar reserva
        $reserva = [
            'espectaculo_id' => $id_espectaculo,
            'cantidad'       => $cantidad,
            'fecha_reserva'  => $fecha_reserva,
            'usuario_id'     => $usuario_id,
            'monto_total'    => $monto_total,
            'estado'         => 'activa'
        ];

        $this->db->insert('reservas', $reserva);
        $reserva_id = $this->db->insert_id();

        // Descontar entradas
        $this->db->set('disponibles', 'disponibles - ' . (int)$cantidad, FALSE)
                 ->where('id_espectaculo', $id_espectaculo)
                 ->update('espectaculos');

        $this->db->trans_complete();

        return $this->db->trans_status() ? $reserva_id : FALSE;
    }

    // ------------------- CANCELAR RESERVA -------------------
    public function cancelar_reserva($id_reserva)
    {
        $reserva = $this->obtener_reserva_por_id($id_reserva);
        if (!$reserva || $reserva['estado'] === 'cancelada')
        {
            return FALSE;
        }

        $this->db->trans_start();

        // Cambiar estado
        $this->db->set('estado', 'cancelada')
                 ->where('id_reserva', $id_reserva)
                 ->update('reservas');

        // Devolver entradas
        $this->db->set(
                'disponibles',
                'disponibles + ' . (int)$reserva['cantidad'],
                FALSE
            )
            ->where('id_espectaculo', $reserva['espectaculo_id'])
            ->update('espectaculos');

        $this->db->trans_complete();

        return $this->db->trans_status();
    }

    // ------------------- ELIMINAR RESERVA -------------------
    public function eliminar_reserva($id_reserva)
    {
        $this->db->where('id_reserva', $id_reserva);
        return $this->db->delete('reservas');
    }

    // ------------------- OBTENER RESERVA POR ID -------------------
    public function obtener_reserva_por_id($id_reserva)
    {
        return $this->db->select('
                r.id_reserva,
                r.espectaculo_id,
                r.cantidad,
                r.fecha_reserva,
                r.monto_total,
                r.usuario_id,
                r.estado,
                e.nombre AS nombre_espectaculo,
                e.fecha  AS fecha_espectaculo,
                e.precio,
                e.disponibles
            ')
            ->from('reservas r')
            ->join('espectaculos e', 'r.espectaculo_id = e.id_espectaculo')
            ->where('r.id_reserva', $id_reserva)
            ->get()
            ->row_array();
    }

    // ------------------- DETALLE DE RESERVA -------------------
    public function obtener_reserva_detalle($id_reserva, $id_usuario)
    {
        return $this->db->select('
                r.id_reserva,
                r.cantidad,
                r.fecha_reserva,
                r.monto_total,
                r.estado,
                e.nombre AS nombre_espectaculo,
                e.fecha  AS fecha_espectaculo,
                e.precio,
                e.disponibles
            ')
            ->from('reservas r')
            ->join('espectaculos e', 'r.espectaculo_id = e.id_espectaculo')
            ->where('r.id_reserva', $id_reserva)
            ->where('r.usuario_id', $id_usuario)
            ->get()
            ->row_array();
    }
}
