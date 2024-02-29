<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
</head>
<body>
    <h2>Quiz</h2>

    <form method="post" action="/quiz/submit">
        <div>
            <p>Question 1:</p>
            <div>
                <label for="question1">Votre réponse (0-5):</label>
                <input type="range" id="question1" name="question1" min="0" max="5" required>
            </div>
        </div>
        <div>
            <p>Question 2:</p>
            <div>
                <label for="question2">Votre réponse (0-5):</label>
                <input type="range" id="question2" name="question2" min="0" max="5" required>
            </div>
        </div>
        <!-- Add more questions as needed -->
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
