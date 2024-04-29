<?php
class Pedido implements JsonSerializable {
    private $id;
    private $data_pedido;
    private $status;

    public function __construct($id, $data_pedido, $status) {
        $this->id = $id;
        $this->data_pedido = $data_pedido;
        $this->status = $status;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'data_pedido' => $this->data_pedido,
            'status' => $this->status
        ];
    }
}
?>