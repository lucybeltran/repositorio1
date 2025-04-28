<?php

include_once "Connection.php";

class Post extends Connection{
    private $table = "posts";

    // Metodos

    public function create($title, $content, $user_id){
        $this->connect();
        $pre = $this->connection->prepare(
            "INSERT INTO $this->table(title,content,user_id) VALUES(?,?,?)"
        );
        $pre->bind_param("ssi",$title,$content,$user_id);
        $pre->execute();
    }

    public function all(){
        // Conecta a la base de datos
        $this->connect();
        $pre = $this->connection->prepare(
            "SELECT * from $this->table"
        );
        $pre->execute();
        $res = $pre->get_result();
        if($res->num_rows == 0 ){
            return null;
        }
        $posts = $res->fetch_all(MYSQLI_ASSOC);
        return $posts;
    }

    public function userPosts($user_id){
        // Conecta a la base de datos
        $this->connect();
        $pre = $this->connection->prepare(
            "SELECT * from $this->table WHERE user_id = ?"
        );
        $pre->bind_param('i',$user_id);
        $pre->execute();
        $res = $pre->get_result();
        if($res->num_rows == 0 ){
            return null;
        }
        $posts = $res->fetch_all(MYSQLI_ASSOC);
        return $posts;
    }
}