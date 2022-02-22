<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
      <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
      <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
      <link rel="stylesheet" href="task.css">
      <title>Task Tracker || hpcreatives</title>
    </head>
      <body>
        <div id="container">
          <h1>New Task</h1>
          <form action="insert_task.php" method="post">
              <label for="cat">Category</label>

                <select name="cat" id="cat">
                    <option value="0">Personal</option>
                    <option value="1">Professional</option>
                    <option value="2">Study Related</option>
                    <option value="3">Other</option>
                </select>

                <label for="text">Task</label>
                <textarea name="text" id="text"></textarea>
                
                <label for="taskdate">Date</label>
                <input type="date" id="taskdate" name="taskdate" />

                <label for="complete">Task Completed !!!</label>
                <input type="checkbox" id="complete" name="complete" value="1" /><br/>
                
                <button type="submit">Submit Your Task</button>
          </form>

          <?php

            include 'connect.php';
            $sql = "SELECT * FROM task";
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            print("<h2>Incomplete Your Task</h2>");

            //Incomplete Goals
            while($row = mysqli_fetch_array($result)){
              if($row['task_complete'] == 0){
                  if($row['task_category'] == 0){
                    $cat = "Personal";
                  } elseif ($row['task_category' == 1]) {
                    $cat = "Professional";
                  } elseif ($row['task_category' == 2]){
                    $cat = "Study Related";
                  } else {
                    $cat = "Other";
                  }
                  echo "<div class='task'>";
                  echo "<a href='complete.php?id=" . $row['task_id'] . "'><button class='btnComplete'>Complete</button></a><strong>";
                  echo  $cat . "</strong><p>" . $row['task_text'] . "</p>Task Date: " . $row['task_date'];
                  echo "</div>";
                }
            }

            //Complete Goals
            print("<h2>Complete Your Task</h2>");
            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            while($row = mysqli_fetch_array($result)){
              if($row['task_complete'] != 0){
                  if($row['task_category'] == 0){
                    $cat = "Personal";
                  } elseif ($row['task_category' == 1]) {
                    $cat = "Professional";
                  } elseif ($row['task_category' == 2]) {
                    $cat = "Study Related";
                  } else {
                    $cat = "Other";
                  }
                  echo "<div class='task'>";
                  echo "<a href='delete.php?id=" . $row['task_id'] . "'><button class='btnDelete'>Delete</button></a><strong>";
                  echo  $cat . "</strong><p>" . $row['task_text'] . "</p>Task Date: " . $row['task_date'];
                  echo "</div>";
                }
            }
        ?>
    </div>
  </body>
</html>
