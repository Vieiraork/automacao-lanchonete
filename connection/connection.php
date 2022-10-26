<?php


class DbConnection {
    public function stablishDBConnection() {
        try {
            $conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'lanchonete'
            );

            return $conn;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>