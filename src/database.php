<?php declare(strict_types=1);
namespace Example;

class Database
{
    private \PDO $connection;

    public function __construct()
    {
        // Read the database connection parameters from environment variables
        $db_host = getenv('DB_HOST');
        $db_name = getenv('DB_NAME');
        $db_user = getenv('DB_USER');

        // Read the password file path from an environment variable
        $password_file_path = getenv('PASSWORD_FILE_PATH');

        // Read the password from the file
        $db_pass = trim(file_get_contents($password_file_path));

        $this->connection = new \PDO(
            "mysql:host=$db_host;dbname=$db_name",
            $db_user,
            $db_pass
        );
    }

    public function getConnection(): \PDO
    {
        return $this->connection;
    }

    public function getMessages(): array
    {
        $statement = $this->connection->prepare(
            'SELECT * FROM messages'
        );
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertMessage(string $title, string $message): void
    {
        $statement = $this->connection->prepare(
            'INSERT INTO messages (title, message) VALUES (:title, :message)'
        );
        $statement->execute([
            'title' => $title,
            'message' => $message,
        ]);
    }

    public function close(): void
    {
        unset($this->connection);
    }
}

?>