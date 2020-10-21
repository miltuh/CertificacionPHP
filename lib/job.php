<?php
  class Job{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // obtener todos los Empleos
    public function getAllJobs(){
      $this->db->query("SELECT empleos.*, categorias.nombre AS cnombre
                        FROM empleos
                        INNER JOIN categorias
                        ON empleos.categoria_id = categorias.id
                        ORDER BY post_fecha DESC
                        ");
            // asignar result set
            $results = $this->db->resultSet();

            return $results;
    }

    //obtener categorias
    public function getCategories(){
      $this->db->query("SELECT * FROM categorias");
            // asignar result set
            $results = $this->db->resultSet();

            return $results;
          }

    // obtener trabajos por categoria
    public function getByCategory($category){
      $this->db->query("SELECT empleos.*, categorias.nombre AS cnombre
                        FROM empleos
                        INNER JOIN categorias
                        ON empleos.categoria_id = categorias.id
                        WHERE empleos.categoria_id = $category
                        ORDER BY post_fecha DESC
                        ");
            // asignar result set
            $results = $this->db->resultSet();

            return $results;
    }

        //obtener categoria
        public function getCategory($category){
          $this->db->query("SELECT * FROM categorias WHERE id = :categoria_id");

          $this->db->bind(':categoria_id', $category);

          //asignar fila
          $row = $this->db->single();

          return $row;
        }

        //obtener job
        public function getJob($id){
          $this->db->query("SELECT * FROM empleos WHERE id = :id");

          $this->db->bind(':id', $id);

          //asignar fila
          $row = $this->db->single();

          return $row;
        }

        //crear trabajo
        public function create($data){
          //consulta para insertar
          $this->db->query("INSERT INTO empleos (categoria_id, titulo_empleo,
          empresa, descripcion, lugar, salario, contacto_usuario,
          contacto_email)
        VALUES (:categoria_id, :titulo_empleo, :empresa, :descripcion,
        :lugar, :salario, :contacto_usuario, :contacto_email)");
        //bind data
        $this->db->bind(':categoria_id', $data['categoria_id']);
        $this->db->bind(':titulo_empleo', $data['titulo_empleo']);
        $this->db->bind(':empresa', $data['empresa']);
        $this->db->bind(':descripcion', $data['descripcion']);
        $this->db->bind(':lugar', $data['lugar']);
        $this->db->bind(':salario', $data['salario']);
        $this->db->bind(':contacto_usuario', $data['contacto_usuario']);
        $this->db->bind(':contacto_email', $data['contacto_email']);
        //ejecturar
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

      //elimnar trabajo
      public function delete($id){
        $this->db->query("DELETE FROM empleos WHERE id = $id");
      //ejecturar
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
      }

      //actualizar trabajo
      public function update($id, $data){
        //consulta para insertar
        $this->db->query("UPDATE empleos
        SET
        categoria_id = :categoria_id,
        titulo_empleo = :titulo_empleo,
        empresa = :empresa,
        descripcion = :descripcion,
        lugar = :lugar,
        salario = :salario,
        contacto_usuario = :contacto_usuario,
        contacto_email = :contacto_email
        WHERE id = $id");
      //bind data
      $this->db->bind(':categoria_id', $data['categoria_id']);
      $this->db->bind(':titulo_empleo', $data['titulo_empleo']);
      $this->db->bind(':empresa', $data['empresa']);
      $this->db->bind(':descripcion', $data['descripcion']);
      $this->db->bind(':lugar', $data['lugar']);
      $this->db->bind(':salario', $data['salario']);
      $this->db->bind(':contacto_usuario', $data['contacto_usuario']);
      $this->db->bind(':contacto_email', $data['contacto_email']);
      }

  }
