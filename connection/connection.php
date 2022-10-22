<?php
namespace connection;

class Connection {
    public function stablishDBConnection() {
        try {
            $conn = new mysqli(
                'localhost',
                'root',
                ''
            );

            return $conn;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}

?>