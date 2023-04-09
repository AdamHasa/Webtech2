<?php

namespace app\database;

use app\core\Application;
use mysql_xdevapi\Statement;
use Slim\App;

class database
{
    public \PDO $pdo;

    public function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';

        $this->pdo = new \PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    }

    public function applyMigrations(){
        $this->createMigrationsTable();
        $appliedMigrations =$this->getAppliedMigrations();

        $newMigrations = [];
        $files = scandir(Application::$ROOT_DIR.'/migrations');
        $toApplyMigrations = array_diff($files, $appliedMigrations);
        foreach ($toApplyMigrations as $migration){
            if ($migration === '.' || $migration === '..'){
                continue;
            }
            require_once Application::$ROOT_DIR.'/migrations/'.$migration;
            $classname = pathinfo($migration, PATHINFO_FILENAME);
            $instance = new $classname();
            echo "applying migration";
            $instance->up();
            $newMigrations[] = $migration;
        }

        if (empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        } else {
            echo 'All migrations applied';
        }

    }

    public  function createMigrationsTable(){
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(255),
  password VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS exams (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255),
  date DATE,
  courseId INT,  
  PRIMARY KEY (id),
  FOREIGN KEY (courseId) REFERENCES courses(id),
);

CREATE TABLE IF NOT EXISTS courses (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR,
  description VARCHAR,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS enrollment (
  id INT NOT NULL AUTO_INCREMENT,
  cijfer INT,
  userId INT,
  examId INT,
  PRIMARY KEY (id),
  FOREIGN KEY (userId) REFERENCES users(id),
  FOREIGN KEY (examId) REFERENCES exams(id),     
);");
    }

    public function getAppliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function saveMigrations(array $migrations){
        $migrations = array_map(fn($m) =>"('$m')", $migrations);
        $this->pdo->prepare("INSERT INTO migrations (migrations) VALUES 
            ('m0001_initial.php')                            
          ");

    }

}