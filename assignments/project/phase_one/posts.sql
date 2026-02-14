CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,

  -- form data
  title     VARCHAR(100),
  content   VARCHAR(1000),
  mainTag   VARCHAR(100),

  -- auto generated
  postTime  TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- this line is from lab 4, where it automatically assigns a time based on when you submit
);
