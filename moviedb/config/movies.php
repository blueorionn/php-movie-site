<?php
require 'connect.php';
require 'utils.php';

class Movies extends DatabaseConnection
{
    public function getAllMovies()
    {
        $stmt = $this->conn->prepare("SELECT * FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMovieById($Id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM movies WHERE id = ?");
        $stmt->execute([$Id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createMovie(
        $title,
        $release_year,
        $rating,
        $genre,
        $poster,
        $movie_description
    ) {
        $sql = "INSERT INTO movies (id, title, release_year, rating, genre, poster, movie_description) VALUES (:id, :title, :release_year, :rating, :genre, :poster, :movie_description)";
        $stmt = $this->conn->prepare($sql);

        // Generating uuid
        $id = uuidv4();

        // Bind values securely
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':release_year', $release_year, PDO::PARAM_INT);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_STR); // PDO does not have a PDO::PARAM_FLOAT, so we use PDO::PARAM_STR instead
        $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
        $stmt->bindParam(':poster', $poster, PDO::PARAM_STR);
        $stmt->bindParam(':movie_description', $movie_description, PDO::PARAM_STR);

        // Execute the query
        if ($stmt->execute()) {
            $message = "Movie created successfully!";
            return $message;
        } else {
            $error = "Failed to create movie.";
            return $error;
        }
    }

    public function updateMovie(
        $id,
        $title,
        $release_year,
        $rating,
        $genre,
        $poster,
        $movie_description
    ) {
        $sql = "UPDATE movies SET title = :title, release_year = :release_year, rating = :rating, genre = :genre, poster = :poster, movie_description = :movie_description WHERE id = :id";
        $stmt = $this->conn->prepare($sql);

        // Bind values securely
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':release_year', $release_year, PDO::PARAM_INT);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
        $stmt->bindParam(':poster', $poster, PDO::PARAM_STR);
        $stmt->bindParam(':movie_description', $movie_description, PDO::PARAM_STR);

        // Execute the query
        if ($stmt->execute()) {
            $message = "Movie updated successfully!";
            return $message;
        } else {
            $error = "Failed to update movie.";
            return $error;
        }
    }
}
