CREATE TABLE IF NOT EXISTS teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    display_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS lessons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_id INT NOT NULL,
    level ENUM('beginner', 'elementary', 'pre-intermediate', 'intermediate') NOT NULL,
    topic VARCHAR(150) NOT NULL,
    vocab JSON NOT NULL,
    warmup JSON NOT NULL,
    questions JSON NOT NULL,
    background_key VARCHAR(50) NOT NULL DEFAULT 'calm',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (teacher_id) REFERENCES teachers(id) ON DELETE CASCADE,
    INDEX idx_teacher_level (teacher_id, level)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
