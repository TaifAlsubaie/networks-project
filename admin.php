<?php
include "includes/navbar.php";
include "db.php";

$message = "";
$edit_mode = false;
$edit_id = "";
$question_text = "";
$option1 = "";
$option2 = "";
$option3 = "";
$option4 = "";
$correct_answer = "";

/* Delete */
if (isset($_GET['delete'])) {
    $delete_id = (int) $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM quiz_questions WHERE question_id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        $message = "Question deleted successfully.";
    } else {
        $message = "Error deleting question: " . $conn->error;
    }
    $stmt->close();
}

/* Edit load */
if (isset($_GET['edit'])) {
    $edit_id = (int) $_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM quiz_questions WHERE question_id = ?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $edit_mode = true;
        $question_text = $row['question_text'];
        $option1 = $row['answer_option_1'];
        $option2 = $row['answer_option_2'];
        $option3 = $row['answer_option_3'];
        $option4 = $row['answer_option_4'];
        $correct_answer = $row['correct_answer'];
    }
    $stmt->close();
}

/* Add or Update */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question_text = trim($_POST['question_text']);
    $option1 = trim($_POST['option1']);
    $option2 = trim($_POST['option2']);
    $option3 = trim($_POST['option3']);
    $option4 = trim($_POST['option4']);
    $correct_answer = trim($_POST['correct_answer']);

    if (isset($_POST['update_id']) && $_POST['update_id'] !== "") {
        $update_id = (int) $_POST['update_id'];
        $stmt = $conn->prepare("UPDATE quiz_questions SET question_text=?, answer_option_1=?, answer_option_2=?, answer_option_3=?, answer_option_4=?, correct_answer=? WHERE question_id=?");
        $stmt->bind_param("ssssssi", $question_text, $option1, $option2, $option3, $option4, $correct_answer, $update_id);
        if ($stmt->execute()) {
            $message = "Question updated successfully.";
            $edit_mode = false;
            $edit_id = "";
            $question_text = $option1 = $option2 = $option3 = $option4 = $correct_answer = "";
        } else {
            $message = "Error updating question: " . $conn->error;
        }
        $stmt->close();
    } else {
        $stmt = $conn->prepare("INSERT INTO quiz_questions (question_text, answer_option_1, answer_option_2, answer_option_3, answer_option_4, correct_answer) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $question_text, $option1, $option2, $option3, $option4, $correct_answer);
        if ($stmt->execute()) {
            $message = "Question added successfully.";
            $question_text = $option1 = $option2 = $option3 = $option4 = $correct_answer = "";
        } else {
            $message = "Error adding question: " . $conn->error;
        }
        $stmt->close();
    }
}

/* Fetch all questions */
$result = $conn->query("SELECT * FROM quiz_questions ORDER BY question_id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin - Quiz Management</title>
<style>
/* نفس CSS القديم */
body {font-family: Arial, sans-serif; background: #f5f7fa; margin:0; padding:0;}
.container {width:90%; max-width:1100px; margin:30px auto;}
h1,h2 {color:#1e3a8a;}
.card {background:#fff; border-radius:12px; padding:20px; margin-bottom:25px; box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.message {background:#e0f2fe; color:#0c4a6e; padding:12px 15px; border-radius:8px; margin-bottom:15px;}
table {width:100%; border-collapse:collapse; margin-top:15px; overflow-x:auto;}
table, th, td {border:1px solid #dbe3ea;}
th {background:#1e3a8a; color:white;}
th, td {padding:10px; text-align:left; vertical-align:top;}
.btn {display:inline-block; padding:8px 14px; text-decoration:none; border-radius:8px; border:none; cursor:pointer; font-size:14px;}
.btn-edit {background:#3b82f6; color:white;}
.btn-delete {background:#ef4444; color:white;}
.btn-save {background:#1e3a8a; color:white;}
.btn-cancel {background:#6b7280; color:white; margin-left:8px;}
input[type="text"], select {width:100%; padding:10px; margin-top:6px; margin-bottom:14px; border:1px solid #cbd5e1; border-radius:8px; box-sizing:border-box;}
label {font-weight:bold; color:#334155;}
.actions a {margin-right:8px;}
.small-text {color:#64748b; font-size:14px; margin-top:-8px; margin-bottom:15px;}
@media (max-width:768px){table{display:block; overflow-x:auto; white-space:nowrap;} .container{width:95%;}}
</style>
</head>
<body>
<div class="container">
<h1>Quiz Management Page</h1>

<?php if ($message != ""): ?>
<div class="message"><?php echo $message; ?></div>
<?php endif; ?>

<div class="card">
<h2>All Questions</h2>
<table>
<tr>
<th>ID</th>
<th>Question Text</th>
<th>Option 1</th>
<th>Option 2</th>
<th>Option 3</th>
<th>Option 4</th>
<th>Correct Answer</th>
<th>Actions</th>
</tr>
<?php if ($result && $result->num_rows > 0): ?>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['question_id']; ?></td>
<td><?php echo $row['question_text']; ?></td>
<td><?php echo $row['answer_option_1']; ?></td>
<td><?php echo $row['answer_option_2']; ?></td>
<td><?php echo $row['answer_option_3']; ?></td>
<td><?php echo $row['answer_option_4']; ?></td>
<td><?php echo $row['correct_answer']; ?></td>
<td class="actions">
<a class="btn btn-edit" href="admin.php?edit=<?php echo $row['question_id']; ?>">Edit</a>
<a class="btn btn-delete" href="admin.php?delete=<?php echo $row['question_id']; ?>" onclick="return confirm('Are you sure you want to delete this question?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr><td colspan="8">No questions found.</td></tr>
<?php endif; ?>
</table>
</div>

<div class="card">
<h2><?php echo $edit_mode ? "Edit Question" : "Add New Question"; ?></h2>
<p class="small-text"><?php echo $edit_mode ? "Update the selected question below." : "Fill in the form to add a new quiz question."; ?></p>

<form method="POST" action="admin.php">
<input type="hidden" name="update_id" value="<?php echo $edit_mode ? $edit_id : ""; ?>">

<label>Question Text</label>
<input type="text" name="question_text" value="<?php echo htmlspecialchars($question_text); ?>" required>

<label>Answer Option 1</label>
<input type="text" name="option1" value="<?php echo htmlspecialchars($option1); ?>" required>

<label>Answer Option 2</label>
<input type="text" name="option2" value="<?php echo htmlspecialchars($option2); ?>" required>

<label>Answer Option 3</label>
<input type="text" name="option3" value="<?php echo htmlspecialchars($option3); ?>" required>

<label>Answer Option 4</label>
<input type="text" name="option4" value="<?php echo htmlspecialchars($option4); ?>" required>

<label>Correct Answer</label>
<select name="correct_answer" required>
<option value="">Select the correct answer</option>
<option value="<?php echo htmlspecialchars($option1); ?>" <?php if($correct_answer == $option1) echo "selected"; ?>><?php echo $option1 != "" ? htmlspecialchars($option1) : "Option 1"; ?></option>
<option value="<?php echo htmlspecialchars($option2); ?>" <?php if($correct_answer == $option2) echo "selected"; ?>><?php echo $option2 != "" ? htmlspecialchars($option2) : "Option 2"; ?></option>
<option value="<?php echo htmlspecialchars($option3); ?>" <?php if($correct_answer == $option3) echo "selected"; ?>><?php echo $option3 != "" ? htmlspecialchars($option3) : "Option 3"; ?></option>
<option value="<?php echo htmlspecialchars($option4); ?>" <?php if($correct_answer == $option4) echo "selected"; ?>><?php echo $option4 != "" ? htmlspecialchars($option4) : "Option 4"; ?></option>
</select>

<button class="btn btn-save" type="submit"><?php echo $edit_mode ? "Update Question" : "Add Question"; ?></button>
<?php if ($edit_mode): ?><a class="btn btn-cancel" href="admin.php">Cancel</a><?php endif; ?>
</form>
</div>
</div>
<?php include "includes/footer.php"; ?>