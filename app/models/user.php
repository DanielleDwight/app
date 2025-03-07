<?php

/**
 * ModelsFacade Class
 * 
 * This class extends the DBConnection class and provides a facade for performing CRUD operations
 * on the `dalira_table` in the database. It uses prepared statements with bound parameters to
 * ensure security and prevent SQL injection attacks.
 */
class ModelsFacade extends DBConnection
{

  /**
   * Create a new record in the `dalira_table`.
   * 
   * @param string $data The data to be inserted into the `data` column of the `dalira_table`.
   * @return PDOStatement Returns the executed PDOStatement object.
   */
  function create($data)
  {
    // Prepare the SQL statement to insert data into the `dalira_table`.
    $sql = $this->connect()->prepare("INSERT INTO dalira_table (data) VALUES (?)");
    
    // Execute the prepared statement with the provided data.
    $sql->execute([$data]);
    
    // Return the executed PDOStatement object.
    return $sql;
  }

  /**
   * Read all records from the `dalira_table`.
   * 
   * @return PDOStatement Returns the executed PDOStatement object containing all records.
   */
  function read()
  {
    // Prepare the SQL statement to select all records from the `dalira_table`.
    $sql = $this->connect()->prepare("SELECT * FROM user_info");
    
    // Execute the prepared statement.
    $sql->execute();
    
    // Return the executed PDOStatement object.
    return $sql;
  }

  /**
   * Update a record in the `dalira_table` based on the provided `id`.
   * 
   * @param string $data The new data to update in the `data` column.
   * @param int $id The `id` of the record to be updated.
   * @return PDOStatement Returns the executed PDOStatement object.
   */
  function update($data, $id)
  {
    // Prepare the SQL statement to update a record in the `dalira_table` using bound parameters.
    $sql = $this->connect()->prepare("UPDATE dalira_table SET data = ? WHERE id = ?");
    
    // Execute the prepared statement with the provided data and id.
    $sql->execute([$data, $id]);
    
    // Return the executed PDOStatement object.
    return $sql;
  }

  /**
   * Delete a record from the `dalira_table` based on the provided `id`.
   * 
   * @param int $id The `id` of the record to be deleted.
   * @return PDOStatement Returns the executed PDOStatement object.
   */
  function delete($id)
  {
    // Prepare the SQL statement to delete a record from the `dalira_table`.
    $sql = $this->connect()->prepare("DELETE FROM dalira_table WHERE id = ?");
    
    // Execute the prepared statement with the provided `id`.
    $sql->execute([$id]);
    
    // Return the executed PDOStatement object.
    return $sql;
  }

}

?>