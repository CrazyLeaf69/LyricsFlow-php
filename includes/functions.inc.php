<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; // do this with playlist
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    createPlaylist($conn);
    header("location: ../signup.php?error=none");
    exit();
}
function createPlaylist($conn) {
    $sql = "INSERT INTO playlist (usersPlaylist) VALUES ('');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function playlistExists($conn, $id) {
    $sql = "SELECT usersPlaylist FROM playlist WHERE id = ?;"; // do this with playlist
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return implode('', $row);
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function getid($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; // do this with playlist
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row["usersId"];
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $pwd) {
    $id = getid($conn, $username, $username);
    $uidExists = uidExists($conn, $username, $username);
    $get_playlist = playlistExists($conn, $id);

    if ($uidExists === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersid"];
        $_SESSION["fullName"] = $uidExists["usersName"];
        $_SESSION["email"] = $uidExists["usersEmail"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        
        $_SESSION["userplaylist"] = $get_playlist;
        header("Location: ../index.php");
        exit();
    }
}

function addtoplaylist($conn, $videoId, $userUid) {
    $id = getid($conn, $userUid, $userUid);
    $userplaylist = playlistExists($conn, $id);
    $strplaylist = $userplaylist . ' | '. $videoId;

    $sql = "UPDATE playlist SET usersPlaylist=? where id=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $strplaylist, $id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("location: ../profile.php");
}

function removefromplaylist($conn, $stringPL, $userUid) {
    $id = getid($conn, $userUid, $userUid);
    $get_playlist = playlistExists($conn, $id);

    $sql = "UPDATE playlist SET usersPlaylist=? where id=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "si", $stringPL, $id);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    $_SESSION["userplaylist"] = $get_playlist;
    header("location: ../profile.php");
}
