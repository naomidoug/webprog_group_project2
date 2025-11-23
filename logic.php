<?php
$questions = [
    1 => "This person is known as the first computer programmer. Their work dates back to the 1840s",
    2 => "Originally, pests that got into computer parts; this now refers to an error.",
    3 => "Known as the father of computer science, he is most known for code cracking during WWII",
    4 => "This operating system, created in 1991 by Linus Torvalds, became the backbone of modern servers.",
    5 => "This government-funded network launched in 1969 and became the foundation of the modern internet.",
    6 => "This linear data structure follows “first in, first out.”",
    7 => "An ordered collection that allows random access in O(1) time.",
    8 => "A tree structure where each node can have many children is known as this.",
    9 => "This structure represents graphs using a list of neighbors for every node.",
    10 => "This advanced heap structure supports fast merging operations and is often used in theoretical algorithm problems.",
    11 => "This sorting algorithm compares adjacent elements and swaps them if out of order.",
    12 => "This algorithm recursively divides a problem in half and has O(n log n) average complexity.",
    13 => "This algorithm selects a “pivot” to partition data; worst-case time is O(n²).",
    14 => "This algorithm prints every element of a binary tree by visiting left subtree, node, then right subtree.",
    15 => "This technique solves problems by storing the results of subproblems to avoid recomputation.",
    16 => "This type of malware encrypts your files and demands payment.",
    17 => "CIA triad stands for Confidentiality, Integrity, and this:",
    18 => "This attack overloads a server with traffic to make it unavailable.",
    19 => "A vulnerability that allows attackers to inject malicious commands and disrupt databases is known as this:",
    20 => "This technique involves exploiting software before developers have issued a patch",
    21 => "Holds active processes on the PC, abbreviated as RAM",
    22 => "This unit of measurement describes how much electrical power a PSU can deliver.",
    23 => "This is the “brain” of the computer, responsible for processing instructions.",
    24 => "This measurement represents how many operations a CPU can perform per second, often listed in GHz.",
    25 => "This component spins at 5400 or 7200 RPM and uses magnetic platters to store data.",
    26 => "This branch of AI involves learning patterns from data without explicit programming.",
    27 => "This 1950 test evaluates whether a machine can mimic human behavior.",
    28 => "This neural network architecture is especially good at analyzing images.",
    29 => "This concept refers to models generating outputs that seem plausible but are factually wrong.",
    30 => "GPT models, BERT, and LLaMA are examples of this type of model trained on massive text corpora."
];

$answers = [
    1 => "Who is Ada Lovelace?",
    2 => "What is a bug?",
    3 => "Who is Alan Turing?",
    4 => "What is Linux?",
    5 => "What is ARPANET?",
    6 => "What is a queue?",
    7 => "What is an array?",
    8 => "What is an n-arry tree?",
    9 => "What is an adjacency list?",
    10 => "What is a Fibonacci heap?",
    11 => "What is bubble sort?",
    12 => "What is merge sort?",
    13 => "What is quick sort?",
    14 => "What is in-order traversal?",
    15 => "What is dynamic programming?",
    16 => "What is ransomware?",
    17 => "What is availability?",
    18 => "What is a DDoS attack?",
    19 => "What is SQL injection?",
    20 => "What is a zero-day exploit?",
    21 => "What is Random Access Memory (RAM)?",
    22 => "What is a watt?",
    23 => "What is a CPU?",
    24 => "What is clock speed?",
    25 => "What is a hard disk drive?",
    26 => "What is machine learning?",
    27 => "What is the Turing Test?",
    28 => "What is a convolutional neural network (CNN)?",
    29 => "What are hallucinations (in AI)?",
    30 => "What are large language models?",

];

$selected = isset($_GET['q']) ? (int)$_GET['q'] : null;

$currentQuestion = "";
$feedback = "";

if ($selected !== null && isset($questions[$selected])) {
    $currentQuestion = $questions[$selected];

    // If the user submitted an answer
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $userAnswer = trim($_POST['answer']);
        $correct = $answers[$selected];

        if (strcasecmp($userAnswer, $correct) === 0) {
            $feedback = "✔️ Correct!";
        } else {
            $feedback = "❌ Incorrect. The correct answer was: <strong>$correct</strong>";
        }
    }
}
?>
