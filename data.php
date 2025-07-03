<?php
session_start();

if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

if (isset($_POST['add']) && !empty(trim($_POST['task']))) {
    $_SESSION['todos'][] = ['task' => htmlspecialchars($_POST['task']), 'done' => false];
}

if (isset($_POST['toggle'])) {
    $i = (int) $_POST['toggle'];
    $_SESSION['todos'][$i]['done'] = !$_SESSION['todos'][$i]['done'];
}

if (isset($_POST['delete'])) {
    $i = (int) $_POST['delete'];
    array_splice($_SESSION['todos'], $i, 1);
}

if (isset($_POST['edit']) && isset($_POST['edit_task'])) {
    $i = (int) $_POST['edit'];
    $_SESSION['todos'][$i]['task'] = htmlspecialchars($_POST['edit_task']);
}

$todos = $_SESSION['todos'];
$total = count($todos);
$done = count(array_filter($todos, fn($t) => $t['done']));
$undone = $total - $done;
$progress = $total > 0 ? round(($done / $total) * 100) : 0;
